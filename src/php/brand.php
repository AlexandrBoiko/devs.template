<?php
$template = 'brand';
include '_header.php';
?>
<div class="brand">
    <div class="header-brand">
      <h1>Бренды</h1>
       <div class="desc-block">
         <p><i class="icon-ex"></i><span>— эксклюзивный бренд</span></p>
         <p><i class="icon-new"></i><span>— новый бренд</span></p>
       </div>
    </div>
    <div class="container">
      <div class="list-brand">
      <?php
      for ($i = 0; $i <= 5; $i++) {
      ?>
      <div class="block-brand">
        <div class="liter-block"><span>A</span></div>
        <div class="liters-block">
          <p><a href="#">A. Testoni</a><i class="icon-ex"></i><i class="icon-new"></i></p>
          <p><a href="#">Acca Kappa</a><i class="icon-ex"></i></p>
          <p><a href="#">Acne</a><i class="icon-new"></i></p>
          <p><a href="#">Add</a></p>
          <p><a href="#">Adidas Jeremy Scott</a><i class="icon-new"></i></p>
          <p><a href="#">Adidas Mk</a></p>
          <p><a href="#">Adidas X Mary Katrantzou</a></p>
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
