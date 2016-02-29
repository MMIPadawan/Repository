
		$( document ).ready(function(){
			$(".button-collapse").sideNav();

    		$('.collapsible').collapsible({
     			 accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
   			 });

    		    $('.tooltipped').tooltip({delay: 50});
				$('select').material_select();

		});
