<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?> - Aliance Production</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">О компании</a></li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Контрактное производство</a>
                 <ul class="mobile-submenu">
                     <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Автомобильная химия</a></li>
                     <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Бытовая химия</a></li>  
                     <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a></li>  
                     <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a></li>  
                     <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Косметическая продукция</a></li>  
                     <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Краски аэрозольные</a></li>    
                 </ul>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Собственные марки</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Автохимия AG-Tech</a></li>
                    <li class="mobile-submenu-item"><a href="#" class="mobile-submenu-link">Автохимия AP</a></li>   
                </ul>
            </li>
            <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Новости</a></li>
            <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Контакты</a></li>
          </ul>
          <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
          <div class="mobile-info">
            <svg class="location-svg" width="12" height="16.0156">
                <use href="img/icon/sprite.svg#location"></use>
            </svg>
            <address class="mobile-info-address">
                г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="mobile-info">
            <svg class="email-svg" width="16" height="12">
                <use href="img/icon/sprite.svg#email"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
                a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="mobile-social">
            <svg class="wk-svg" width="19.5493" height="12">
                <use href="img/icon/sprite.svg#wk"></use>
            </svg>
            <svg class="instagram-svg" width="16" height="16">
                <use href="img/icon/sprite.svg#instagram"></use>
            </svg>
          </div>
    </div>  
    <nav class="navbar navbar-light">
         <a href="#" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
         </a>
        <a href="./" class="header-logo">
            <svg class="logo-svg logo-light">
                <use href="img/icon/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="img/icon/sprite.svg#logo"></use>
            </svg>
        </a>
        <ul class="header-nav">
          <li class="header-nav-item"><a href="./index.php" class="header-nav-link">О компании</a></li>
          <li class="header-nav-item"><a href="./contracts.php" class="header-nav-link">Контрактное производство</a></li>
          <li class="header-nav-item"><a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
          <li class="header-nav-item"><a href="#" class="header-nav-link">Новости</a></li>
          <li class="header-nav-item"><a href="#" class="header-nav-link">Контакты</a></li>
        </ul>
         <div class="header-phone">
            <svg class="phone-svg" width="24" height="24">
                <use href="img/icon/sprite.svg#phone"></use>
            </svg>
              <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
         </div>
         <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
            <svg class="button-icon" width="24" height="24">
                <use href="img/icon/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
         </button>
   </nav>
   <!-- /.navbar -->
    <section class="about-company <?= $header_style;?>">
            <div class="container">
                <div class="seporator"></div>
                <h2 class="title about-company-title"><?= $page_title ?></h2>
                <ul class="about-company-items">
                    <li class="about-company-item"><a href="#" class="about-company-link">Главная</a></li>
                    <li class="about-company-item"><?= $page_title ?></li>
                </ul>
            </div>
    </section>
    
</body>
</html>