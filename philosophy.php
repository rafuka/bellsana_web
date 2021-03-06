<?php
$title = "Philosophie | bellsana";
require("inc/header.php"); ?>



<div class="jumbotron img-slider">
  <img class="img-responsive land-img" src="img/philosophy.jpg" alt="Bellsana's philosophy image banner"/>
</div>

<div class="banner">
  <div class="container text-center">
    <p><?php echo $lang['philosophy-banner']; ?></p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9">
        <?php echo $lang['philosophy-text']; ?>
    </div>
    <div class="hidden-xs col-sm-3">
      <div class="info-circle">
        <?php echo $lang['circle-1']; ?>
      </div>
      <div class="info-circle">
        <?php echo $lang['circle-2']; ?>
      </div>
      <a href="services.php">
        <div class="info-circle">
          <?php echo $lang['circle-3']; ?>
        </div>
      </a>
    </div>
  </div>
</div>


<?php require("inc/footer.php"); ?>
