Реализация MVC - проекта на PHP (CSS3, HTML5, JQuery, PHP7, MySQL)

![Главная](https://github.com/DenysSidorov/shop.les/raw/master/gitPhoto/example.jpg)
![Карточка товара](https://github.com/DenysSidorov/shop.les/raw/master/gitPhoto/example2.jpg)

----Пользователи----
* admin  => ss@ss.ss   PASSword
* user => aaaaaa@aaa.aaa   123456

----РОУТИНГ-----
     //Товар
   * 'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
     // Каталог
   * 'catalog' => 'catalog/index', // actionIndex в CatalogController
   * 'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',  // actionCategory в CatalogController
   * 'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController
     // Корзина
   * 'cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
   * 'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController
   * 'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
   * 'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAdd в CartController
   * 'cart' => 'cart/index', // actionIndex в CartController
     // Пользователь
   * 'user/register' => 'user/register',
   * 'user/login' => 'user/login',
   * 'user/logout' => 'user/logout',
     // Кабинет пользователя
   *  'cabinet/edit' => 'cabinet/edit',
   *  'cabinet' => 'cabinet/index',
     // Контакты
   * 'contacts' => 'site/contact',
     // Новости /*Не реализовано*/
   * 'news/([0-9]+)' => 'news/GetNew/$1', //rialization of news
   * 'news' => 'news/index',
   * 'blog/([0-9]+)' => 'blog/view/$1',
   * 'blog' => 'blog/index',
     // Управление товарами:
   * 'admin/product/create' => 'adminProduct/create',
   * 'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
   * 'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
   *'admin/product' => 'adminProduct/index',
     // Управление категориями:
   * 'admin/category/create' => 'adminCategory/create',
   * 'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
   * 'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
   * 'admin/category' => 'adminCategory/index',
     // Управление заказами:
   * 'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
   * 'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
   * 'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
   * 'admin/order' => 'adminOrder/index',
   * 'select/count' => 'countSelect/index',
    // Админпанель:
   * 'admin' => 'admin/index',
    // Главная
   * '' => 'site/index', // actionIndex в SiteController

![Заказ](https://github.com/DenysSidorov/shop.les/raw/master/gitPhoto/example3.jpg)
![Список товаров](https://github.com/DenysSidorov/shop.les/raw/master/gitPhoto/example4.jpg)

Не всегда хватает времени, но в проект можно добавить след. функционал :

- все фото на сайте одного размера
- в карточнке товара сделать хороший просмотр фото
- +/- одну еденицу товара
- в админке полное описание - сделать выше 150рх
- поиск по блогу
- реализация блога (БД, модель, контроллер, вью, работа с другими чатстями приложения)
- админка для администратора (добавить блог)
- админка для редактора, доступ только к панели редактора блока
- прижать футер
- улучшить интерактивность при наведении на товар (css/html)
- вызможность выбора цветовой схемы
- возможность выбора варианта доставку
- корректную обработку 404, 500, и 303 и т.д ошибок
- подключение внешнего сервиса/ов для оплаты
- подключение внешнего сервиса/ов для доставки
