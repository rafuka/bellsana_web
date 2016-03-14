<?php require("inc/header.php");
  if (isset($_GET['team'])) {
    switch($_GET['team']) {
      case "christian":
      require("inc/christian.php");
      break;

      case "gabriela":
      require("inc/gabriela.php");
      break;

      case "sibylle":
      require("inc/sibylle.php");
      break;

      case "richard":
      require("inc/richard.php");
      break;

      case "paul":
      require("inc/paul.php");
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
  <img class="img-responsive land-img" src="<?php echo $img1 ?>" alt="<?php echo $img1_alt; ?>"/>
</div>
<div class="banner nomarginbanner">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo $name ?></h2>
        <p class="member-info"><?php echo $info ?></p>
      </div>
      <?php if ($_GET['team'] == 'sibylle'): ?>
      <div class="col-md-6">
        <ul>
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle'?>">Deutsch</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle&extra_lang=es'?>">Spanisch</a></li>
        </ul>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 img-fixed">
      <?php
        if(isset($_GET['extra_lang'])) {
          switch($_GET['extra_lang']) {
            case "es":
              echo $text1_es;
              break;

            default:
              echo $text1;
              break;
          }
        }
        else {
          echo $text1;
        }
      ?>
    </div>
    <div class="col-md-6">
      <img class="team-img-fixed" src="<?php echo $img2 ?>" alt="<?php echo $img2_alt; ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img class="team-img-fixed" src="<?php echo $img3 ?>" alt="<?php echo $img3_alt; ?>"/>
    </div>
    <div class="col-md-6 img-fixed">
      <?php
        if(isset($_GET['extra_lang'])) {
          switch($_GET['extra_lang']) {
            case "es":
              echo $text2_es;
              break;

            default:
              echo $text2;
              break;
          }
        }
        else {
          echo $text2;
        }
      ?>
    </div>
  </div><!-- end row -->
</div><!--/ container -->
<?php if ($_GET['team'] == 'gabriela'): ?>
  <div class="banner nomarginbanner">
    <p>Opinions from my clients:</p><br/>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="flexslider quotes">
    		<ul class="slides">
    			<li><?php echo $quotes[0] ?></li>
    			<li><?php echo $quotes[1] ?></li>
          <li><?php echo $quotes[2] ?></li>
    		</ul>
    	</div>
    </div>
  </div>
</div>
</div>
<?php endif; ?>


<?php require("inc/footer.php"); ?>
