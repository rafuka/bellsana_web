<?php
$title = "Team | Bellsana";
require("inc/header.php");?>
<?php
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

<div id="popup">
    <a id="close">x</a>
    <div class="popup-container">
      <div class="popup-content">
        <h2>Patientenstimmen</h2>
          <div class="quotes">
        		<ul>
              <?php foreach ($quotes as $quote): ?>
        			   <li><?php echo $quote ?></li>
                 <hr/>
        			<?php endforeach;?>
        		</ul>
        	</div> <!--/ quotes -->
        </div><!--/ popup-content -->
    </div><!-- popup-container -->
</div><!--/ popup -->

<div class="jumbotron img-slider">
  <img class="img-responsive land-img" src="<?php echo $img1 ?>" alt="<?php echo $img1_alt; ?>"/>
</div>

<div class="banner nomarginbanner">
  <div class="container text-center">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php echo $name ?></h2>
        <p class="member-info"><?php echo $info ?></p>
        <?php if (isset($quotes)): ?>
          <a id="open-popup">Patientenstimmen</a>
        <?php endif; ?>

      <?php if ($_GET['team'] == 'sibylle'): ?>

        <ul class="extra-lang">
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle'?>"><span class="flag-icon flag-icon-de"></span>Deutsch</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle&extra_lang=es'?>"><span class="flag-icon flag-icon-es"></span>Spanisch</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle&extra_lang=fr'?>"><span class="flag-icon flag-icon-fr"></span>Franz&ouml;sisch</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle&extra_lang=it'?>"><span class="flag-icon flag-icon-it"></span>Italienisch</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?team=sibylle&extra_lang=en'?>"><span class="flag-icon flag-icon-gb"></span>Englisch</a></li>
        </ul>

      <?php endif; ?>
      </div>
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

            case "fr":
              echo $text1_fr;
              break;

            case "it":
              echo $text1_it;
              break;

            case "en":
              echo $text1_en;
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
    <div class="hidden-xs hidden-sm col-md-6">
      <img class="team-img-fixed" src="<?php echo $img2 ?>" alt="<?php echo $img2_alt; ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="hidden-xs hidden-sm col-md-6">
      <img class="team-img-fixed" src="<?php echo $img3 ?>" alt="<?php echo $img3_alt; ?>"/>
    </div>
    <div class="col-md-6 img-fixed">
      <?php
        if(isset($_GET['extra_lang'])) {
          switch($_GET['extra_lang']) {
            case "es":
              echo $text2_es;
              break;

            case "fr":
              echo $text2_fr;
              break;

            case "it":
              echo $text2_it;
              break;

            case "en":
              echo $text2_en;
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

<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }

    $('#open-popup').click(function() {
      toggle_visibility('popup');
      $('body').removeClass('scroll');
      $('body').addClass('no-scroll');

    });

    $('#close').click(function() {
      toggle_visibility('popup');
      $('body').removeClass('no-scroll');
      $('body').addClass('scroll');

    });
</script>

<?php require("inc/footer.php"); ?>
