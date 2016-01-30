<?php require("inc/header.php"); ?>

	<div class="jumbotron img-slider">
		<img class="img-responsive land-img" src="img/belsana44.jpg" alt="Lobby Image"/>
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
					<h3>Our Philosophy</h3>
					<p><?php echo $lang['phil-info'] ?></p>
				</div>
			</a>
			<a href="services.php">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/2.png" alt="services logo"/>
					<h3>Services</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
					  ut aliquip ex ea commodo consequat.</p>
				</div>
			</a>
			<a href="#">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/3.png" alt="seminars logo"/>
					<h3>Seminars</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
					  ut aliquip ex ea commodo consequat.</p>
				</div>
			</a>
			<a href="#">
				<div class="col-xs-12 col-sm-6 col-md-3 info-box">
					<img class="info-img" src="img/4.png" alt="work for us logo"/>
					<h3>Work For Us</h3>
					<p><?php echo $lang['work-info'] ?></p>
				</div>
			</a>
		</div><!--/ row -->
	</div><!--/ container -->

	<div class="banner inside-banner">
		<span id="team-section" class="dummy-anchor"></span>
		<div class="container">
			<p>Meet The Team</p>
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
					<p>Fussreflexzonenmassage<br/>
							Hypnose<br/>
							Coaching
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
				<div class="col-sm-6 col-md-4 col-md-offset-2 team-box">
					<img class="team-img" src="img/t4.jpg" alt="team member"/>
					<h3>Sibylle Seitzmeir</h3>
					<p>EMF Balancing Technique<br/>
							Quantum Pulse Machine
					</p>
				</div>
			</a>
			<a href="team.php?team=paul">
				<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0 team-box">
				  <img class="team-img" src="img/t5.jpg" alt="team member"/>
					<h3>Paul H&ouml;rter</h3>
					<p>Osteopathie<br/>
						Physiotherapie<br/>
						LnB Schmerztherapie
					</p>
				</div>
			</a>
		</div><!--/ row -->
	</div><!--/ container -->

	<div id="contact-banner" class="banner inside-banner">
		<span id="contact-section" class="dummy-anchor"></span>
		<div class="container">
		<p>Contact Us</p>
		</div>
	</div>


	<div class="container-fluid contact-wrap">
		<div id="contact-info">
			<p>
				Bellsana Gesundheitzentrum
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
