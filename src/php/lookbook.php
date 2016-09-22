<?php
$template = 'lookbook';
include '_header.php';
?>
<div class="lookbook">
    <div class="container">
      <h1>Lookbook</h1>
      <div class="list-lookbook">
        <?php
        for ($i = 0; $i <= 5; $i++) {
        ?>
        <div class="image-block">
            <img src="http://localhost/saks_mobile/uploads/m_lookbook1.jpg" class="image img-responsive">
            <div class="autor"><p>David Meister</p></div>
        </div>
          <div class="image-block">
            <img src="http://localhost/saks_mobile/uploads/m_lookbook2.jpg" class="image img-responsive">
            <div class="autor"><p>David Meister</p></div>
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
