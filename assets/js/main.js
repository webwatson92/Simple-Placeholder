 $(document).ready(function(){
 	//Display other navigation on click
 	$("nav li.active a").on('click', function(e){
 		e.preventDefault();
 		$('nav li:not(.active)').slideToggle(400);
 	});
 	/*MAGNIFIC POPUP*/
 	$(".popup").magnificPopup({
 		type: "iframe", 
 		removeDelay: 500,
 		showCloseBtn: true
	});
 		//fonction pour array_down
 		/*$('.array_down').on('click', function(e){
 			e.preventDefault();
 			$(this)removeClasse('bounce');//retire la classe bounce
 			$('html, boty')animate({ scrollTop: $(document).height() }, "slow") //on fait descend 			
 		});*/

		
 	
 });