/*=============================================
CABEZOTE
=============================================*/

$("#btnCategorias").click(function(){

	if(window.matchMedia("(max-width:767px)").matches){

		$("#btnCategorias").after($("#categorias").slideToggle("fast"))

	}else{

		$("#cabezote").after($("#categorias").slideToggle("fast"))
		
	}

		
})

/*=====================================
EFECTOS CON EL SCROLL
=====================================*/
$(window).scroll(function(){
	var scrollY = window.pageYOffset;
	console.log(scrollY);
	if(scrollY > 0) {
			
			$(".barraSuperior").addClass("backColor");
		
	}else{
			$(".barraSuperior").removeClass("backColor");

	}


	

})

$.scrollUp({

	scrollText:"",
	scrollSpeed: 1000,
	easingType: "easeOutQuint"

});