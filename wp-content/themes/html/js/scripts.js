$(function() {
  $( "#tabs" ).tabs();
});

// when the DOM is ready, convert the feed anchors into feed content
jQuery(document).ready(function() {

	jQuery('#newsslider').accessNews({
		title : "",
		subtitle:"",
		speed : "fast",
		slideBy : 4,
		slideShowInterval: 100000,
		slideShowDelay: 100000
	});

	jQuery('#newsslider2').accessNews({
		title : "BREAKING NEWS:",
		subtitle:"stories from the internet",
		speed : "slow",
		slideBy : 4,
		slideShowInterval: 100000,
		slideShowDelay: 100000
	});

});