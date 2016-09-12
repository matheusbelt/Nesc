$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };

}



// Função para definir a distancia da box em relação ao topo do documento HTML.
function boxTop(idBox) {
	var boxOffset = $(idBox).offset();
	return boxOffset.top;
};
// A animação acontece aqui.
// Primeiro adicionamento a função .scroll ao documento, assim toda vez que o usuário utilizar o scroll a função é ativada.
$(document).scroll(function() {
	// Adiciona o valor total do Scroll a variável documentTop	
	var documentTop = $(this).scrollTop();	
	// Verifica se o documentTop é maior que o Topo da box #azul menos 120px. Esses 120px é para que a função seja ativada um pouco antes da box chegar ao topo.
  // Se for maior ele adiciona a classe animar.
  // Caso contrário ele remove a classe animar.
	if (documentTop > boxTop('#quemsomos') - 0) {
		$('#menu').addClass('fixo');
	} else {
		$('#menu').removeClass('fixo');
	}
});