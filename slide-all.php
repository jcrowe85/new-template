var show_all_fs, current_fs
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parents("fieldset");
	show_all = $('.control-group').parents("fieldset");
	
	//hide back arrow
	$('.back-arrow').hide();
	
	
	//show all fieldsets
	show_all.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: .900}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1;
			current_fs.css({'left': left});
			show_all.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			show_all.css("position", "relative");
			current_fs.css("opacity", "1");
			$('.previous-step').hide();
		}, 
		duration: 800, 
		complete: function(){
			
			animating = false;
			$('.previous-step').hide();
			if(animating) return false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});

