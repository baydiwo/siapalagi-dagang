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

	jQuery('.ticker').ticker({
	random:        false, // Whether to display ticker items in a random order
    itemSpeed:     2000,  // The pause on each ticker item before being replaced
    cursorSpeed:   20,    // Speed at which the characters are typed
    pauseOnHover:  true,  // Whether to pause when the mouse hovers over the ticker
    finishOnHover: true,  // Whether or not to complete the ticker item instantly when moused over
    cursorOne:     '_',   // The symbol for the first part of the cursor
    cursorTwo:     '-',   // The symbol for the second part of the cursor
    fade:          true,  // Whether to fade between ticker items or not
    fadeInSpeed:   600,   // Speed of the fade-in animation
    fadeOutSpeed:  600    // Speed of the fade-out animation
});

});