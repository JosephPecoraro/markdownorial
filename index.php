<?php
include 'config.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-tocict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Ruby Readline Documentation, Tutorial, and Examples" />
	<meta name="keywords" content="ruby, readline, documentation, docs, examples, libedit, shell" />
	<title><?php echo $html_title; ?></title>

	<!-- Blueprint CSS Framework (0.8) -->
	<link rel="stylesheet" href="blueprint/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="blueprint/print.css" type="text/css" media="print" />
	<!--[if IE]>
	  <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" />
	<![endif]-->

	<!-- Styles -->
	<link rel="stylesheet" href="css/twilight.css" type="text/css" media="screen, projection" charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" charset="utf-8" />

	<!-- Scripts -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.pageslide.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/markdownorial.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>

	<!-- Table of Contents Link -->
	<img id="toc" src="images/transparent.png" alt="Table of Contents" title="Table of Contents" />

	<!-- Header and Gradient -->
	<div id="header" class="center last alt">
		<h1><?php echo $tutorial_title; ?></h1>
	</div>
	<div id="header-grad1">&nbsp;</div>
	<div id="header-grad2">&nbsp;</div>
	<div id="header-grad3">&nbsp;</div>

	<!-- Wrapper and Content -->
	<div id="wrapper">
	<div id="container" class="container">
		<div class="push-3 span-18 last" id="content">
			<?php include 'content.html' ?>
		</div>
	</div>
	</div>

	<!-- Footer -->
	<?php include 'footer.php' ?>

</body>
</html>
