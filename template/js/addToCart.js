/**
 * Created by Denis on 10.10.2016.
 */


/**
 * Показывает уведомление, пропадающее через 1.5 сек
 *
 * @param options.top {number} вертикальный отступ, в px
 * @param options.right {number} правый отступ, в px
 * @param options.cssText {string} строка стиля
 * @param options.className {string} CSS-класс
 * @param options.html {string} HTML-текст для показа
 */
    function showNotification(options) {

    var notification = document.createElement('div');
    notification.className = "notification";
    if (options.cssText) {
        notification.style.cssText = options.cssText;
    }
    notification.style.top = (options.top || 0) + 'px'; // can use cssText
    notification.style.right = (options.right || 0) + 'px'; // can use cssText
    if (options.className) {
        notification.classList.add(options.className);
    }

    notification.innerHTML = options.html;
    document.body.appendChild(notification); // over cover

    setTimeout(function() {
        document.body.removeChild(notification);
    }, 1500);
}

// тест работоспособности

;

var divs = document.querySelectorAll('.add-to-cart'), i;

for (i = 0; i < divs.length; ++i) {
    divs[i].addEventListener('click',function () {
            setTimeout(function() {
        showNotification({
            top: 30,
            right: 30,
            html: 'Товар Добавлен в Козину ',
            className: "welcome"
        });
    }, 0);

    });
}


