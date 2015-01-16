/*-----------------------------------------------------------------------------------*/
/* GENERAL SCRIPTS */
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function(){
  	  	
  	// Show/hide the main navigation
  	jQuery('.nav-toggle').click(function() {
	  jQuery('#navigation').slideToggle('fast', function() {
	  	if ( jQuery("#navigation").is('.mobile-menu') ) {
	  		 jQuery("#navigation").removeClass('mobile-menu');
	  	} else {
	  		 jQuery("#navigation").addClass('mobile-menu');
	  	}
	  	return false;
	    // Animation complete.
	  });
	});
	
	// Stop the navigation link moving to the anchor (Still need the anchor for semantic markup)
	jQuery('.nav-toggle a').click(function(e) {
        e.preventDefault();
    });  
  	
});