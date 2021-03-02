// Primeiro card (Diferencial) ativo.
function activeCard() {
	var card = document.getElementById('card-active');
	var cardTitle = document.getElementById('card-title-active');
	
	card.classList.remove('card-active');
	cardTitle.classList.remove('card-title-active');
}



// Owl Carousel
$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		nav:false,
		dots: true,
		loop:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:3,
				nav:true,
				loop:false
			}
		}
    })
});



// Trocar active navbar onclick
$(document).ready(function() {
    $('.navbar-nav a').click(function () {
        $('.navbar-nav a.active').removeClass('active');
        $(this).addClass('active');
    });
});