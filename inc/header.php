<?php
	session_start();
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
	<script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img id="logo" src="img/logo.png" alt="Logo">
			</div>
			<div class="col-md-6">
				<nav class="main-nav">
					<button class="menu-btn"><i class="fa fa-bars"></i></button>
					<div class="nav-collapse">
						<ul>
				      <li><a href="index.php"><?php echo $lang['nav-home'] ?></a></li>
				      <li>
								<a href="index.php#aboutbanner"><?php echo $lang['nav-about'] ?></a>
								<ul class="sub-menu">
									<li><a><?php echo $lang['nav-philosophy'] ?></a></li>
									<li><a><?php echo $lang['nav-services'] ?></a></li>
									<li><a><?php echo $lang['nav-seminars'] ?></a></li>
									<li><a><?php echo $lang['nav-work'] ?></a></li>
								</ul>
							</li>
					    <li><a href="index.php#teambanner"><?php echo $lang['nav-team'] ?></a></li>
					    <li><a href="#"><?php echo $lang['nav-contact'] ?></a></li>
					  </ul>
					</div>
				</nav>
			</div>
			<div class="col-md-2">
				<ul id="lang-list">
					<li><a href="index.php?lang=de">De</a></li>
					<li><a href="index.php?lang=fr">Fr</a></li>
					<li><a href="index.php?lang=it">It</a></li>
					<li><a href="index.php?lang=en">En</a></li>
				</ul>
			</div>
		</div>

	</header>
