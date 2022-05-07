function slickyNavbar(){
	var topo = $('#header').height(); // altura do topo
    var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
    var navbar = $('.barra-navegacao');
    var slicky = $('.slicky-navbar');

    console.log("Altura do topo: " + topo);
    console.log("Valor rolado: " + scrollTop);

    
    if(scrollTop > topo){
        navbar.css("position", "fixed");
        navbar.addClass("slicky-navbar").addClass("fixed-top");
        slicky.css("top","0");
        
        console.log("ERA PARA APARECER O SLICKY");
    }else if((topo+70) > scrollTop){
       
        if($('.barra-navegacao').hasClass("fixed-top")){
            navbar.css("position", "absolute");
            slicky.css("top","-100px");
            $('.barra-navegacao').removeClass("fixed-top");

        }   
    }
    if (topo >= scrollTop){
        navbar.removeClass("slicky-navbar");
        navbar.removeAttr( 'style' );
    } 
}

function scrollNavbar(){
	$(window).scroll(function(){
		slickyNavbar();
	});
}