jQuery(document).ready(function(){

	jQuery('.five-things').fadeIn();

	//Menu Effects
	jQuery('.return').click(function(){
		jQuery('#formFT').show();
		jQuery('#qstnFT').hide();
		jQuery('#gearFT').hide();
		jQuery('.return').hide();
	});
	jQuery('.question').click(function(){
		jQuery('#formFT').hide();
		jQuery('#qstnFT').show();
		jQuery('#gearFT').hide();
		jQuery('.return').show();
	});
	jQuery('.gear').click(function(){
		jQuery('#formFT').hide();
		jQuery('#qstnFT').hide();
		jQuery('#gearFT').show();
		jQuery('.return').show();
	});

	//Posts pages change
	jQuery('.posts-list-menu').click(function(){
		jQuery(this).addClass('list-menu-active');
		jQuery('.pages-list-menu').removeClass('list-menu-active');
		jQuery('.pages-list').slideUp(function(){
			jQuery('.posts-list').slideDown();
		});
	});
	jQuery('.pages-list-menu').click(function(){
		jQuery(this).addClass('list-menu-active');
		jQuery('.posts-list-menu').removeClass('list-menu-active');
		jQuery('.posts-list').slideUp(function(){
			jQuery('.pages-list').slideDown();
		});
	});

	//Dinamic Insert Data
	jQuery('#configure-1 > .content-choice-col-two > .list-content > li.enviar-valores').click(function(){
		var link1 = jQuery(this).attr('link');
		var name1 = jQuery(this).text();
		jQuery('#lnk-pagina-custom-1').val(link1);
		jQuery('#nome-pagina-custom-1').val(name1);
		jQuery('#configure-1 > .content-choice-col-two > .list-content > li.enviar-valores').removeClass('active-choice');
		jQuery(this).addClass('active-choice');

	});
	jQuery('#configure-2 > .content-choice-col-two > .list-content > li.enviar-valores').click(function(){
		var link2 = jQuery(this).attr('link');
		var name2 = jQuery(this).text();
		jQuery('#lnk-pagina-custom-2').val(link2);
		jQuery('#nome-pagina-custom-2').val(name2);
		jQuery('#configure-2 > .content-choice-col-two > .list-content > li.enviar-valores').removeClass('active-choice');
		jQuery(this).addClass('active-choice');
	});
	jQuery('#configure-3 > .content-choice-col-two > .list-content > li.enviar-valores').click(function(){
		var link3 = jQuery(this).attr('link');
		var name3 = jQuery(this).text();
		jQuery('#lnk-pagina-custom-3').val(link3);
		jQuery('#nome-pagina-custom-3').val(name3);
		jQuery('#configure-3 > .content-choice-col-two > .list-content > li.enviar-valores').removeClass('active-choice');
		jQuery(this).addClass('active-choice');
	});
	jQuery('#configure-4 > .content-choice-col-two > .list-content > li.enviar-valores').click(function(){
		var link4 = jQuery(this).attr('link');
		var name4 = jQuery(this).text();
		jQuery('#lnk-pagina-custom-4').val(link4);
		jQuery('#nome-pagina-custom-4').val(name4);
		jQuery('#configure-4 > .content-choice-col-two > .list-content > li.enviar-valores').removeClass('active-choice');
		jQuery(this).addClass('active-choice');
	});
	jQuery('#configure-5 > .content-choice-col-two > .list-content > li.enviar-valores').click(function(){
		var link5 = jQuery(this).attr('link');
		var name5 = jQuery(this).text();
		jQuery('#lnk-pagina-custom-5').val(link5);
		jQuery('#nome-pagina-custom-5').val(name5);
		jQuery('#configure-5 > .content-choice-col-two > .list-content > li.enviar-valores').removeClass('active-choice');
		jQuery(this).addClass('active-choice');
	});

	//Dinamic title
	var nameF1 = jQuery('#nome-pagina-custom-1').attr('value');
	if (nameF1 != "") {
		jQuery('#option-1 > .name-item-display > span').text(nameF1);
	}
	var nameF2 = jQuery('#nome-pagina-custom-2').attr('value');
	if (nameF2 != "") {
		jQuery('#option-2 > .name-item-display > span').text(nameF2);
	}
	var nameF3 = jQuery('#nome-pagina-custom-3').attr('value');
	if (nameF3 != "") {
		jQuery('#option-3 > .name-item-display > span').text(nameF3);
	}
	var nameF4 = jQuery('#nome-pagina-custom-4').attr('value');
	if (nameF4 != "") {
		jQuery('#option-4 > .name-item-display > span').text(nameF4);
	}
	var nameF5 = jQuery('#nome-pagina-custom-5').attr('value');
	if (nameF5 != "") {
		jQuery('#option-5 > .name-item-display > span').text(nameF5);
	}

});