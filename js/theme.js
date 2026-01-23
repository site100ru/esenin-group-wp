/* Функция "Прилипало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
	if ( window.screen.width >= 769 ) {
		if ( prokrutka > 64 ) {
			document.getElementById('top-menu-2').classList.add('fixed-top');
			document.getElementById('top-menu-2').style.position = 'fixed';
			document.getElementById('top-menu-2').style.top = 0;
			/**/
			document.getElementById('top-menu-2').style.background = 'rgb(0,0,0,.7)';
			document.getElementById('top-menu-2').style.boxShadow = '5px 0px 5px 3px rgba(0,0,0,.25)';
			document.getElementById('navbar-brand-ico').style.width = '66px';
			document.getElementById('navbar-brand-img').style.width = '51px';
			document.getElementById('navbar-brand-title').style.fontFamily = 'Gilroy-Light';
			document.getElementById('navbar-brand-title').style.lineHeight = '1.125';
			document.getElementById('navbar-brand-title').style.maxWidth =' calc(100% - 66px)';
			
		} else {
			document.getElementById('top-menu-2').classList.remove('fixed-top');
			document.getElementById('top-menu-2').style.position = 'absolute';
			document.getElementById('top-menu-2').style.top = '64px';
			/**/
			document.getElementById('top-menu-2').style.background = 'none';
			document.getElementById('top-menu-2').style.boxShadow = 'none';
			document.getElementById('navbar-brand-ico').style.width = '106px';
			document.getElementById('navbar-brand-img').style.width = '91px';
			document.getElementById('navbar-brand-title').style.fontFamily = 'Gilroy-Medium';
			document.getElementById('navbar-brand-title').style.lineHeight = '1.5';
			document.getElementById('navbar-brand-title').style.maxWidth = 'calc(100% - 106px)';
			
			
		}
	} else {
		document.getElementById('top-menu-2').style.position = '';
		document.getElementById('top-menu-2').style.top = 0;
		document.getElementById('top-menu-2').classList.add('fixed-top');
	}
	
	/* Убираем меню при прокрутке */
	document.getElementById( 'navbarSupportedContent2' ).classList.remove('show');
}