$(document).ready(function(){

// KEMBALI KE ATAS
	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 400) {
				$('#back-top').fadeIn("slow");
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 2000);
			return false;
		});
	});


	if (!!$('.sid').offset()) {
		var stickyTop = $('.sid').offset().top; 
		$(window).scroll(function(){ 
			    var windowTop = $(window).scrollTop();
			    if (stickyTop < windowTop){
			       $('.sid').css({ position: 'fixed', top: 95 });
			    }
			    else {
			       $('.sid').css('position','static');
			    }
		    });
	}

//TAMPILKAN ATAU SEMBUNYIKAN ELEMEN

	//TAMPILKAN ATAU SEMBUNYIKAN SEARCH
	$(".form-cari").hide();
 		$(".cari").show();

 		$('.cari').click(function(){
 			$(".form-cari").fadeToggle();
 			$(".cari").stop().animate({opacity:"1"}, 200);
 			$("#fade").fadeToggle();
 			document.formcari.s.focus();
 		});

 	//TAMPILKAN ATAU SEMBUNYIKAN SHARE
 	$('.share-media').hide();
 	$('.share').show();
 		$('.share').click(function(){
 			$(".share-media").slideToggle("fast");
 			$(".share").stop().animate({opacity:"1"}, 500);
 		});

});



	function tutupcari() {
		document.getElementById('form-cari').style.display='none';
		document.getElementById('fade').style.display='none';
	};


// HOTKEY
	function hotkey(){
		shortcut.add("Ctrl+F",function() {
 			$(".form-cari").fadeToggle();
 			$(".cari").stop().animate({opacity:"1"}, 200);
 			$("#fade").fadeToggle();
 			document.formcari.s.focus();
		});

		shortcut.add("CTRL+S", function() {
			$(".share-media").slideToggle("fast");
 			$(".share").stop().animate({opacity:"1"}, 500);
		});
	};
		window.onload = hotkey;





