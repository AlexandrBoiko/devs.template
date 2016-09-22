<?php
$template = 'trand_inside';
include '_header.php';
?>
<div class="trand_inside">
    <div class="container">
      <div class="link-to-back"><a href="#"><i class="to-back"></i><span>Назад</span></a></div>
      <h1>Мини и макси длина</h1>
      <div class="description">
        <p>Дизайнеры решили отойти от темы "золотой середины", предлагая нам "удариться в крайности" - хотя бы, выбирая длину собственной юбки. Актуальна либо смелая длина мини, либо суперженственная
          макси.</p>
      </div>
      <div class="full-trand">
        <?php
        for ($i = 0; $i <= 5; $i++) {
          ?>
          <div class="image-row">
            <div class="image-block">
              <a href="#">
                <img src="http://localhost/saks_mobile/uploads/m_trands_inside.jpg" class="image img-responsive">
                <div class="autor"><p>David Meister</p></div>
              </a>
            </div>
            <div class="image-block">
              <a href="#">
                <img src="http://localhost/saks_mobile/uploads/m_trands_inside2.jpg" class="image img-responsive">
                <div class="autor"><p>David Meister</p></div>
              </a>
            </div>
          </div>
          <div class="image-row">
            <div class="image-block">
              <a href="#">
                <img src="http://localhost/saks_mobile/uploads/m_trands_inside3.jpg" class="image img-responsive">
                <div class="autor"><p>David Meister</p></div>
              </a>
            </div>
            <div class="image-block">
              <a href="#">
                <img src="http://localhost/saks_mobile/uploads/m_trands_inside4.jpg" class="image img-responsive">
                <div class="autor"><p>David Meister</p></div>
              </a>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
</div>
<?php
include '_footer.php';
?>
