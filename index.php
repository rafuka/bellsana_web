<?php require("inc/header.php"); ?>

	<div class="jumbotron img-slider">

	</div>
	<div class="flexslider">
		<ul class="slides">
			<li><img class="img-responsive land-img" src="img/lobby-not.jpg" alt="Lobby Image"/></li>
			<li><img class="img-responsive land-img" src="img/lobby_this.jpg" alt="Lobby Image"/></li>
		</ul>
	</div>
	<div id="aboutbanner" class="banner">
		<span id="about-section" class="dummy-anchor"></span>
		<div class="container">
			<?php echo $lang['banner-1']; ?>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<a href="philosophy.php">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/1.png" alt="philosophy logo"/>
					<h3><?php echo $lang['phil-header']; ?></h3>
					<p><?php echo $lang['phil-info'] ?></p>
				</div>
			</a>
			<a href="services.php">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/2.png" alt="services logo"/>
					<h3><?php echo $lang['treat-header']; ?></h3>
					<p><?php echo $lang['treat-info']; ?></p>
				</div>
			</a>
			<a href="seminars.php">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/3.png" alt="seminars logo"/>
					<h3><?php echo $lang['sem-header']; ?></h3>
					<p><?php echo $lang['sem-info']; ?></p>
				</div>
			</a>
			<a href="work.php">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/4.png" alt="work for us logo"/>
					<h3><?php echo $lang['work-header']; ?></h3>
					<p><?php echo $lang['work-info'] ?></p>
				</div>
			</a>
		</div><!--/ row -->
	</div><!--/ container -->

	<div class="banner inside-banner">
		<span id="team-section" class="dummy-anchor"></span>
		<div class="container">
			<p><?php echo $lang['team-banner']; ?></p>
		</div>
	</div>

	<div class="container">
		<div class="row ">
			<a href="team.php?team=gabriela">
				<div class="col-sm-6 col-md-4 team-box">
					<img class="team-img" src="img/t1.jpg" alt="team member"/>
					<h3>Gabriela Thirring</h3>
					<p>Dipl. Homoopathy shp/HVS<br/>
						 Coaching for Life - EMDR
					</p>
				</div>
			</a>
			<a href="team.php?team=richard">
				<div class="col-sm-6 col-md-4 team-box">
					<img class="team-img" src="img/t2.jpg" alt="team member"/>
					<h3>Richard Casanova</h3>
					<p>Coaching<br/>
						 Energietherapie<br/>
					   Hypnose
					</p>
				</div>
			</a>
			<a href="team.php?team=christian">
				<div class="col-sm-6 col-md-4 team-box">
					<img class="team-img" src="img/t3.jpg" alt="team member"/>
					<h3>Christian Harringer</h3>
					<p>Komplement&auml;r-Therapeut
					</p>
				</div>
			</a>
			<a href="team.php?team=sibylle">
				<div class="col-sm-6 col-md-4 team-box">
					<img class="team-img" src="img/t4.jpg" alt="team member"/>
					<h3>Sibylle Seitzmeir</h3>
					<p>EMF Balancing Technique<br/>
							Quantum Pulse Machine
					</p>
				</div>
			</a>
			<a href="team.php?team=paul">
				<div class="col-sm-6 col-md-4 team-box">
				  <img class="team-img" src="img/t5.jpg" alt="team member"/>
					<h3>Paul H&ouml;rter</h3>
					<p>LNB Schmerztherapie<br/>
						Osteopathie<br/>
						Physiotherapie
					</p>
				</div>
			</a>
			<a href="team.php?team=elena">
				<div class="col-sm-6 col-md-4 team-box">
				  <img class="team-img" src="img/t6.jpg" alt="team member"/>
					<h3>Elena Urben</h3>
					<p>Gesichtsmassage<br/>
					</p>
				</div>
			</a>
		</div><!--/ row -->
	</div><!--/ container -->

	<div id="contact-banner" class="banner inside-banner">
		<span id="contact-section" class="dummy-anchor"></span>
		<div class="container">
		<p><?php echo $lang['contact-banner']; ?></p>
		</div>
	</div>


	<div class="container-fluid contact-wrap">
		<div id="contact-info">
			<p>
				bellsana Gesundheitzentrum &reg;
			</p>
			<ul>
				<li>Bleicherweg 54</li>
				N&auml;he Paradeplatz
				<li><i class="fa fa-envelope"></i>&nbsp;info@bellsana.ch</li>
				<li><i class="fa fa-phone"></i>&nbsp;+41(0)44 281 31 31</li>
			</ul>
		</div>
		<div id="map">

		</div>

	</div><!--/ container -->


<?php require("inc/footer.php"); ?>
