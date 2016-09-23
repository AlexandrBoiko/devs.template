<?php
$template = 'homepage';
include '_header.php';
?>
<div class="homepage">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            for ($i = 0; $i <= 3; $i++) {
                ?>

              <div class="swiper-slide">
                <a href="#">
                  <div class="">   
                    <img src="uploads/slider/slider_img.png" class="image img-responsive">
                  </div>
                  <div class="title center black normal">
                    <span> скидки в Devs 111</span>
                  </div>
                </a>
              </div>
               <h2>test sprites -  <i class="icon-vk"></i><i class="icon-tw"></i> </h2>
                <?php
            }
            ?>
        </div>
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-pagination swiper-pagination-white"></div>
    </div>

    <div class="container">

      <div class="list-news">
        <div class="image-block"><a href="#"><img src="uploads/m_homepage.jpg" class="image img-responsive"></a></div>
        <div class="info-block">
          <div class="date"><a href="#"><span>25 Июня</span></a></div>
          <div class="title"><a href="#"><p>Будет солнце: стильные женские Образы для весны</p></a></div>
          <div class="description"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
        </div>
      </div>
      <div class="list-news">
        <div class="image-block"><a href="#"><img src="uploads/m_homepage2.jpg" class="image img-responsive"></a></div>
        <div class="info-block">
          <div class="date"><a href="#"><span>25 Июня</span></a></div>
          <div class="title"><a href="#"><p>Будет солнце: стильные женские Образы для весны</p></a></div>
          <div class="description"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
        </div>
      </div>
    </div>
  <div class="instagram-block">
    <h2>SAKS FIFTH AVENUE В INSTAGRAM</h2>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        for ($i = 0; $i <= 3; $i++) {
          ?>
          <div class="swiper-slide">
            <a href="#">
              <div class="">
                <img src="uploads/slider/slider_img.png" class="image img-responsive">
              </div>
            </a>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>
  </div>

</div>
<?php
include '_footer.php';
?>
