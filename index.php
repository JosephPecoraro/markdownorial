<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-tocict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Ruby Readline Documentation, Tutorial, and Examples" />
	<meta name="keywords" content="ruby, readline, documentation, docs, examples, libedit, shell" />
	<title>Ruby Readline</title>

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
	<script type="text/javascript">
		$(function() {

			// Creates Permalinks and Build Table of Contents from Headers
			var toc = '<ul>';
			var level = 2;
			$('h2, h3')
				.css('cursor','pointer')
				.hover(function() { $(this).append('<span class="hash">&nbsp;#<\/span>') },
				       function() { $(this).find('span').remove() } )
				.each(function() {
					if ( level == 2 && this.tagName == 'H3' ) {
						level = 3; toc += '<li class="none"><ul>';
					} else if ( level == 3 && this.tagName == 'H2' ) {
						level = 2; toc += '<\/ul><\/li>';
					}
					var $elem = $(this);
					$elem.attr('id', '_' + $elem.text().toLowerCase().replace(/\W+/g,'_') );
					toc += '<li><a href="#'+$elem.attr('id')+'">'+$elem.text()+'<\/a><\/li>';
			  })
			  .click(function() { window.location.hash = $(this).attr('id'); });
			toc += '<\/ul>';

			// Page Slider for the Table of Contents
			var $white = $('#header');
			var $black = $('#header-grad1, #header-grad2, #header-grad3, #wrapper');
			var $toc = $('#toc');
			$toc.pageSlide({
          width: 300,
					duration: 275,
					html: '<div id="secondary"><h2>Table of Contents<\/h2>' + toc + '<\/div>',
					start: function(s) {
						if ( s == 'opening' ) { // Start Closing
							$toc.css('display','none');
							$white.css('backgroundImage', 'none');
							$black.css('backgroundImage', 'none');
						}
					},
					stop: function(s) {
						if ( s == 'close' ) { // Done Closing
							$toc.css('display','block');
							$white.css('backgroundImage', 'url(images/sym-white.png)');
							$black.css('backgroundImage', 'url(images/sym-black.png)');
						}
					}
			});

		});
	</script>

</head>

<body>

	<!-- Table of Contents Link -->
	<img id="toc" src="images/transparent.png" alt="Table of Contents" title="Table of Contents" />

	<!-- Header and Gradient -->
	<div id="header" class="center last alt">
		<h1>Ruby Readline Documentation and Tutorial</h1>
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
