<?php
$template = 'blog';
include '_header.php';
?>
<div class="blog">
    <h1>События</h1>
    <div class="swiper-container-bg ">
        <div class="swiper-wrapper-bg">
              <div class="swiper-slide-bg">
                <a href="#">
                  <div class="">
                    <img src="http://localhost/saks_mobile/uploads/slider/blog_slider_img.png" class="image img-responsive">
                  </div>
                  <div class="title center black normal">
                    <p class="title-bg">В ЦВЕТЕ: ЛУЧШИЕ СУМКИ СЕЗОНА</p>
                    <p class="date">25 июнь</p>
                  </div>
                </a>
              </div>
        </div>
    </div>
    <div class="container">
      <?php
      for ($i = 0; $i <= 5; $i++) {
      ?>
      <div class="list-blog">
        <div class="image-block"><a href="#"><img src="http://localhost/saks_mobile/uploads/m_blog1.jpg" class="image img-responsive"></a></div>
        <div class="info-block">
          <div class="date"><a href="#"><span>25 Июня</span></a></div>
          <div class="title"><a href="#"><p>Будет солнце: стильные женские Образы для весны</p></a></div>
          <div class="description"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
        </div>
      </div>
      <div class="list-blog">
        <div class="image-block"><a href="#"><img src="http://localhost/saks_mobile/uploads/m_blog2.jpg" class="image img-responsive"></a></div>
        <div class="info-block">
          <div class="date"><a href="#"><span>25 Июня</span></a></div>
          <div class="title"><a href="#"><p>Будет солнце: стильные женские Образы для весны</p></a></div>
          <div class="description"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
</div>
<?php
include '_footer.php';
?>
