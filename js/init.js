$(document).ready(function() {	
	
	
	// LazyLoad activation
	$(function() {
	    $("img.lazy").lazyload({
		    placeholder : "css/assets/whiterati.gif",
		    threshold : 100,
		    effect : "fadeIn" 
	    });
	});
	
	//Force retina
	//lzld.config.retina = true;
	//lzld.update();
	
	MosaicHandler();
	window.onresize = function() {
		MosaicHandler();
	}
});




function MosaicHandler() // Gestion des cells de la mosa�que
{
	
	var step = 230; // responsive step
	var docWidth = $("body").width(); // largeur totale
	var o = Math.floor(docWidth/step); // l'opérateur de division
	var s = Math.floor($("body").width()/o); // taille du carré de grille
	
	$("header").each(function(i){
				
		$("#logo").css("width", s-20);
		$("#navigation").css("width", s);
		
	});
		
	$(".views-row").each(function(i){
				
		$(".views-row").css("width", s);
		$(".views-row").css("height", s);
		
	});	

}
