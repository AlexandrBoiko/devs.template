<?php
$template = 'blog_inside';
include '_header.php';
?>
<div class="blog_inside">
      <div class="full-blog">
        <div class="container">
          <div class="date"><span>25 Июня</span></div>
          <h1>Будет солнце: стильные женские Образы для весны</h1>
        </div>
        <?php
        for ($i = 0; $i <= 5; $i++) {
        ?>
        <div class="image-block"><img src="http://localhost/saks_mobile/uploads/m_blog_inside1.jpg" class="image img-responsive"></div>
        <div class="container">
          <div class="title"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
          <div class="autor"><p>7 II + Taulant + Castañer + 3.1 PhillipLim</p></div>
          <div class="description">
            <p>Даже если геометрия не была вашим любимым предметом в школе, то у вас есть все шансы исправить положение, создавая стильные актуальные комплекты – например, этот «геометрический» образ выглядит просто великолепно! Верным решением является и монохром, с одним лишь правильным исключением: вкраплением золотой нити в отделку сумки.</p>
          </div>
        </div>
          <div class="image-block"><img src="http://localhost/saks_mobile/uploads/m_blog_inside2.jpg" class="image img-responsive"></div>
          <div class="container">
            <div class="title"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
            <div class="autor"><p>7 II + Taulant + Castañer + 3.1 PhillipLim</p></div>
            <div class="description">
              <p>Даже если геометрия не была вашим любимым предметом в школе, то у вас есть все шансы исправить положение, создавая стильные актуальные комплекты – например, этот «геометрический» образ выглядит просто великолепно! Верным решением является и монохром, с одним лишь правильным исключением: вкраплением золотой нити в отделку сумки.</p>
            </div>
          </div>
          <div class="image-block"><img src="http://localhost/saks_mobile/uploads/m_blog_inside3.jpg" class="image img-responsive"></div>
          <div class="container">
            <div class="title"><p>Отличная погода – лучший повод вывести в свет самые модные вещи из новых коллекций именитых дизайнеров!</p></div>
            <div class="autor"><p>7 II + Taulant + Castañer + 3.1 PhillipLim</p></div>
            <div class="description">
              <p>Даже если геометрия не была вашим любимым предметом в школе, то у вас есть все шансы исправить положение, создавая стильные актуальные комплекты – например, этот «геометрический» образ выглядит просто великолепно! Верным решением является и монохром, с одним лишь правильным исключением: вкраплением золотой нити в отделку сумки.</p>
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
