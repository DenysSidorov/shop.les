<?php

class CartController
{

    public function actionAdd($id)
    {
        // Добавляем товар в корзину

        /*
         *  Если AJAX-добавление в корзину включено, то этот код не выполняется.
         * */
       UserCart::addProduct($id);

        // Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        // Добавляем товар в корзину
        echo UserCart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        //  Для меню
        $categories = array();
        $categories = Category::getCategoriesList();

        // По умолчанию товаров в корзине нет.
        $productsInCart = false;


        // Получим данные из корзины (из сессии пользователя)
        $productsInCart = UserCart::getProducts();

        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = UserCart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }

    public function actionDelete($id)
    {
        UserCart::deleteProductFromCart($id);
        // Удалить товар из корзины
        // Возвращаем пользователя на страницу
        header("Location: /cart/");
    }

    public function actionCheckout()
    {

        // Список категорий для левого меню
        $categories = array();
        $categories = Category::getCategoriesList();


        // Статус успешного оформления заказа
        $result = false;


        // Форма отправлена?
        if (isset($_POST['submit'])) {
            // Форма отправлена? - Да
            // Считываем данные формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            // Валидация полей
            $errors = false;
            if (!User::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!User::checkPhone($userPhone))
                $errors[] = 'Неправильный телефон';

            // Форма заполнена корректно?
            if ($errors == false) {
                // Форма заполнена корректно? - Да
                // Сохраняем заказ в базе данных
                // Собираем информацию о заказе
                $productsInCart = UserCart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }

                // Сохраняем заказ в БД
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    // Оповещаем администратора о новом заказе
                    $adminEmail = '2wsxcde34rfvvfr4@gmail.com';
                    $message = 'yoursite.com/admin/orders';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);

                    // Очищаем корзину
                    UserCart::clear();
                }
            } else {
                // Форма заполнена корректно? - Нет
                // Итоги: общая стоимость, количество товаров
                $productsInCart = UserCart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = UserCart::getTotalPrice($products);
                $totalQuantity = UserCart::countItems();
            }
        } else {
            // Форма отправлена? - Нет
            // Получием данные из корзины
            $productsInCart = UserCart::getProducts();

            // В корзине есть товары?
            if ($productsInCart == false) {
                // В корзине есть товары? - Нет
                // Отправляем пользователя на главную искать товары
                header("Location: /");
            } else {
                // В корзине есть товары? - Да
                // Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = UserCart::getTotalPrice($products);
                $totalQuantity = UserCart::countItems();


                $userName = false;
                $userPhone = false;
                $userComment = false;

                // Пользователь авторизирован?
                if (User::isGuest()) {
                    // Нет
                    // Значения для формы пустые
                } else {
                    // Да, авторизирован
                    // Получаем информацию о пользователе из БД по id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    // Подставляем в форму
                    $userName = $user['name'];
                }
            }
        }

        require_once(ROOT . '/views/cart/checkout.php');

        return true;
    }

}
