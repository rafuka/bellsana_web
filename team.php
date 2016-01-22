<?php require("inc/header.php");
  if (isset($_GET['team'])) {
    switch($_GET['team']) {
      case "christian":
      require("inc/christian.php");
      break;

      default:
        header("location: http://localhost/bellsana/index.php");
        exit();
        break;
    }
  }
  else {
    header("location: http://localhost/bellsana/index.php");
    exit();
  }
?>

<div class="jumbotron img-slider">
  <img class="img-responsive land-img" src="<?php echo $img1 ?>" alt="Christian Harringer photograph"/>
</div>
<div class="banner nomarginbanner">
  <div class="container text-center">
    <h2><?php echo $name ?></h2>

    <p class="member-info"><?php echo $info ?></p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 img-fixed">
      <?php echo $text1; ?>
    </div>
    <div class="col-md-6">
      <img class="team-img-fixed" src="<?php echo $img2 ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img class="team-img-fixed" src="<?php echo $img3 ?>"/>
    </div>
    <div class="col-md-6 img-fixed">
      <p class="text-p">
        <?php echo $text2 ?>
      </p>
    </div>
  </div>
</div><!--/ container -->


<?php require("inc/footer.php"); ?>
