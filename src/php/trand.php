<?php
$template = 'trand';
include '_header.php';
?>
<div class="trand">
    <div class="container">
      <h1>Тренды</h1>
      <div class="list-trand">
        <?php
        for ($i = 0; $i <= 5; $i++) {
        ?>
        <div class="image-block">
            <img src="http://localhost/saks_mobile/uploads/m_trand1.jpg" class="image img-responsive">
            <div class="title">
              <p>Гладиаторы</p>
              <div class="trand-number"><p>Тренд #1</p></div>
              </div>
        </div>
          <div class="image-block">
            <img src="http://localhost/saks_mobile/uploads/m_trand2.jpg" class="image img-responsive">
            <div class="title">
              <p>Гладиаторы</p>
              <div class="trand-number"><p>Тренд #1</p></div>
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
