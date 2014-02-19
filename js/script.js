//script.js
$(document).ready(function(){

	$('#menu').on('click', function(){
		 $('#tab_menu').css({ 'display': 'block'});
                $('#tab_menu').animate(
                        {
                            'margin-left':'477px'
                         
                        },1000, "swing", console.log('entro')) 
	});



	$(document).mouseup(function (e){
		
			    var container = $("div#tab_menu");

			    if (container.has(e.target).length === 0){
			        container.animate({
			                          'margin-left':'-477px'
		                          	},1000);
			    }
	
	});


});