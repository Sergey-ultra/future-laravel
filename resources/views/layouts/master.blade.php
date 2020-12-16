<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Тестовое</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__row">
            <div class="header__left">
                <div class="header__link">
                    <a class="header__phone" href="tel:+74993409471">Телефон: (499) 340-94-71</a>
                    <a class="header__mail" href="mailto:info@future-group.ru">Email: info@future-group.ru</a>
                </div>
                <div class="header__comment">Комментарии</div>
            </div>
            <div class="header__right">
                <img src="img/logo.svg" alt="logo" class="header__logo">
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__logo">
                <img src="img/logo.svg" alt="footer_logo">
            </div>
            <div class="footer__main">
                <div class="footer__contact">
                    <a class="footer__phone" href="tel:+74993409471">Телефон: (499) 340-94-71</a>
                    <a class="footer__email" href="mailto:info@future-group.ru">Email: info@future-group.ru</a>
                    <div class="footer__address">Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</div>
                </div>
                <div class="footer__right">© 2010 - 2014 Future. Все права защищены</div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
