/*
 * Markdownorial Specific Code
 * Author: Joseph Pecoraro
 * Description: Works with the generic html produced
 * by Markdown to dynamically build a table of contents
 * by creating and working with permalinks ids on headers.
 */
$(function() {

	// Creates Permalinks and Build Table of Contents from Headers
	var toc = '<ul>';
	var level = 2;
	$('h2, h3')
		.css('cursor','pointer')
		.hover(function() { $(this).append('<span class="hash">&nbsp;#<\/span>') },
		       function() { $(this).find('span').remove() })
		.each(function() {
			if (level === 2 && this.tagName === 'H3') {
				level = 3; toc += '<li class="none"><ul>';
			} else if (level === 3 && this.tagName === 'H2') {
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
        	if (s === 'opening') { // Start Closing
        		$toc.css('display', 'none');
        		$white.css('backgroundImage', 'none');
        		$black.css('backgroundImage', 'none');
        	}
        },
        stop: function(s) {
        	if (s === 'close') { // Done Closing
        		$toc.css('display', 'block');
        		$white.css('backgroundImage', 'url(images/sym-white.png)');
        		$black.css('backgroundImage', 'url(images/sym-black.png)');
        	}
        }
	});

});
