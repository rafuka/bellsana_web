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

<div class="container">
  <div class="row">
    <img class="img-responsive" src="<?php echo $img1 ?>" alt="Christian Harringer photograph"/>
  </div>
</div><!--/ container -->
<div class="banner nomarginbanner">
  <div class="container text-center">
    <h2><?php echo $name ?></h2>

    <p><?php echo $info ?></p>
  </div>
</div>

<div class="container">
  <div class="row img-bck-1" style="background-image: url('<?php echo $img2 ?>')">
    <div class="col-md-6 col-md-offset-6">
      <h2 class="team-h2"><?php echo $h2 ?></h2>
      <h3 class="team-h3"><?php echo $h3 ?></h3>
      <p class="team-p">
        <?php echo $text1 ?>
      </p>
    </div>
  </div>
  <div class="row img-bck-2" style="background-image: url('<?php echo $img3 ?>')">
    <div class="col-md-6">
      <p class="team-p">
        <?php echo $text2 ?>
      </p>
    </div>
  </div>
</div><!--/ container -->


<?php require("inc/footer.php"); ?>
