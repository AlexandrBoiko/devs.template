<?php
$template = 'lookbook_inside';
include '_header.php';
?>
<div class="lookbook_inside">
    <div class="container">
      <div class="link-to-back"><a href="#"><i class="to-back"></i><span>Назад</span></a></div>
      <h1>David Meister</h1>
      <div class="full-lookbook">
        <?php
        for ($i = 0; $i <= 5; $i++) {
        ?>
        <div class="image-row">
          <div class="image-block">
            <a href="#">
              <img src="http://localhost/saks_mobile/uploads/m_lookbook_inside1.jpg" class="image img-responsive">
            </a>
          </div>
          <div class="image-block">
            <a href="#">
              <img src="http://localhost/saks_mobile/uploads/m_lookbook_inside2.jpg" class="image img-responsive">
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
