/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
	//$('.thumbs').slick();
	$('.carousel').carousel({
	  interval: 0
	})
	// Instantiate MixItUp:
	$('#Container').mixItUp({
		layout: {
			display: 'inline-block'
		}
	});
});
