<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Language" content="ru-RU"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="viewport" content="width=640"/>
    <title>devs.template</title>
    <!-- <link rel="stylesheet" href="http://localhost/saks_mobile/bower_components/Swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="http://localhost/saks_mobile/bower_components/social-likes/dist/social-likes_flat.css">
    <link rel="stylesheet" type="text/css" href="css/gotham/gotham.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
  <!-- Should replace the following with your icons -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body data-template="<?= isset($template) ? $template : '' ?>">
   <h2>he</h2>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </button>
            <a href="/" class="navbar-brand"></a>
            <div class="info">
              <span class="city">КАЗАХСТАН, АЛМАТЫ</span>
              <span class="phone">+7 (727) 326-95-00</span>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="false">О компании <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">КОМПАНИЯ</a></li>
                    <li><a href="#">ИСТОРИЯ</a></li>
                    <li><a href="#">ФИЛОСОФИЯ</a></li>
                    <li><a href="#">КОНТАКТЫ</a></li>
                   </ul>
                </li>
                <li><a href="lookbook.php">Lookbooks</a></li>
                <li><a href="trand.php">Тренды</a></li>
                <li><a href="brand.php">Бренды</a></li>
                <li><a href="#">Акции</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="false">Блог<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">История</a></li>
                    <li><a href="#">Гид по стилю</a></li>
                    <li><a href="#">Звездный стиль</a></li>
                    <li><a href="#">Красота</a></li>
                    <li><a href="blog.php">События</a></li>
                    <li><a href="#">Фотосессии</a></li>
                  </ul>
                </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">SAKS PLUS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Привилегии карты Saks Plus</a></li>
                  <li><a href="#">Статусы карты Saks Plus</a></li>
                  <li><a href="#">Изменение статуса</a></li>
                  <li><a href="#">Накопление и расход</a></li>
                  <li><a href="#">Правила и условия</a></li>
                  <li><a href="#">Возврат товара</a></li>
                  <li><a href="#">Утеря карты Saks</a></li>
                </ul>
              </li>
            </ul>
          <div class="social-block">
            <p>Мы в соц.сетях</p>
            <div class="social-row">
              <a href="#" class="soc-link"><i class="icon-black-facebook"></i></a>
              <a href="#" class="soc-link"><i class="icon-black-twitter"></i></a>
              <a href="#" class="soc-link"><i class="icon-black-inst"></i></a>
            </div>
          </div>
          <div class="form-block">
            <p>Подписаться на рассылку</p>
            <div class="form-row">
              <input class="field" id="" type="text" placeholder="Ваш e-mail">
              <input class="btn" type="submit" value="GO">
            </div>
          </div>
          <div class="copyright-block">
            <p>© 2015, Saks Fifth Avenue. <br/> Все права защищены.</p>
          </div>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
