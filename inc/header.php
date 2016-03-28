<?php
	if (!session_id()) {
		session_start();
	}

	if (isset($_GET['lang'])) {
		$_SESSION['lang'] = $_GET['lang'];
		header('Location:'.$_SERVER['PHP_SELF']);
		exit();
	}

	switch($_SESSION['lang']) {
		case "en":
			require("lang/en.php");
			break;
		case "de":
			require("lang/de.php");
			break;
		case "it":
			require("lang/it.php");
			break;
		case "fr":
			require("lang/fr.php");
			break;
		default:
			require("lang/de.php");
	}
?>

<!DOCTYPE html>
<html <?php echo $lang['lang-attr'] ?>>
<head>
	<title><?php echo $lang['index-title'] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/flag-icon.min.css" rel="stylesheet" type="text/css">

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
			slideshowSpeed: 5000,
			animationDuration: 1500,
			directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false)
			controlNav: false
		});
  });
</script>
</head>
<body>
	<header class="container-fluid">
		<div class="row">
			<div class="logo-wrap">
				<a href="/"><img id="logo" src="img/logo.png" alt="Logo"></a>
			</div>
			<div class="menu-wrap">
			<div class="main-nav-wrap">
				<nav class="main-nav">
					<button class="burgerbtn"><i class="fa fa-bars"></i></button>
					<div class="nav-mobile">
						<ul>
				      <li><a class="main-link" href="index.php"><?php echo $lang['nav-home'] ?></a></li>
				      <li>
								<a class="main-link" href="index.php#about-section"><?php echo $lang['nav-about'] ?><i class="down-icon fa fa-sort-desc"></i></a>
								<ul class="sub-menu">
									<li><a href="philosophy.php"><?php echo $lang['nav-philosophy'] ?></a></li>
									<li><a href="services.php"><?php echo $lang['nav-treatments'] ?></a></li>
									<li><a href="seminars.php"><?php echo $lang['nav-seminars'] ?></a></li>
									<li><a href="work.php"><?php echo $lang['nav-work'] ?></a></li>
									<li><a href="news.php"><?php echo $lang['nav-news'] ?></a></li>
									<li><a href="links.php"><?php echo $lang['nav-links'] ?></a></li>
								</ul>
							</li>
					    <li><a class="main-link" href="index.php#team-section"><?php echo $lang['nav-team'] ?></a></li>
					    <li><a class="main-link" href="index.php#contact-section"><?php echo $lang['nav-contact'] ?></a></li>
					  </ul>

					</div>

				</nav>
			</div>
			<div style="display:none;" class="lang-list-wrap">
			<!--	<button class="lang-btn">
					<?php
						switch($_SESSION['lang']) {
							case 'de':
								echo '<span class="flag-icon flag-icon-de">';
								break;

						}
					?>
				</button>-->
				<ul id="lang-list">
					<li><a href="index.php?lang=de">De</a></li>
					<li><a href="index.php?lang=it">It</a></li>
					<li><a href="index.php?lang=en">En</a></li>
				</ul>
			</div>

			</div><!-- menu-wrap -->
		</div>
	</header>
	<div class="fader">
