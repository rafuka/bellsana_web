<?php require("inc/header.php"); ?>



<div class="jumbotron img-slider">
  <img class="img-responsive land-img" src="img/amethyst.jpg" alt="Bellsana's news image banner"/>
</div>

<div class="banner">
  <div class="container text-center">
    <p><?php echo $lang['news-banner']; ?></p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9">
        <?php echo $lang['news-text']; ?>
		<div>
			<a href="pdf/Harringer_PDF.pdf" target="blank_">
				<img id="pdf-icon" src="img/pdf_icon.png"/>
				BERICHT SCHWEIZER ILLUSTRIERTE, 09. Februar 2009:<br>
				LYMPHDRAINAGE: Mit Sch&ouml;pf-, Dreh- und Pumpgriffen zum Erfolg
			</a>
		</div>
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
