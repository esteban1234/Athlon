$(document).ready(main);

var contador = 1;

function main(){
	$('#header__icon').click(function(){

		if(contador == 1){
			$('.nav-header').animate({
				top: '90'
			},500);
			contador = 0;
		} else {
			contador = 1;
			$('.nav-header').animate({
				top: '-300%'
			},500);
		}

	});

};
