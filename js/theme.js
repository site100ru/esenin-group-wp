/* Функция "Прилипало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
    const topMenu = document.getElementById('top-menu-2');

    if (!topMenu) {
        return
    }

	if ( window.screen.width >= 769 ) {
		if ( prokrutka > 64 ) {
			topMenu.classList.add('fixed-top');
			topMenu.style.position = 'fixed';
			topMenu.style.top = 0;
			/**/
			topMenu.style.background = 'rgb(0,0,0,.7)';
			topMenu.style.boxShadow = '5px 0px 5px 3px rgba(0,0,0,.25)';
			document.getElementById('navbar-brand-ico').style.width = '66px';
			document.getElementById('navbar-brand-img').style.width = '51px';
			document.getElementById('navbar-brand-title').style.fontFamily = 'Gilroy-Light';
			document.getElementById('navbar-brand-title').style.lineHeight = '1.125';
			document.getElementById('navbar-brand-title').style.maxWidth =' calc(100% - 66px)';
			
		} else {
			topMenu.classList.remove('fixed-top');
			topMenu.style.position = 'absolute';
			topMenu.style.top = '64px';
			/**/
			topMenu.style.background = 'none';
			topMenu.style.boxShadow = 'none';
			document.getElementById('navbar-brand-ico').style.width = '106px';
			document.getElementById('navbar-brand-img').style.width = '91px';
			document.getElementById('navbar-brand-title').style.fontFamily = 'Gilroy-Medium';
			document.getElementById('navbar-brand-title').style.lineHeight = '1.5';
			document.getElementById('navbar-brand-title').style.maxWidth = 'calc(100% - 106px)';
			
			
		}
	} else {
		topMenu.style.position = '';
		topMenu.style.top = 0;
		topMenu.classList.add('fixed-top');
	}
	
	/* Убираем меню при прокрутке */
	document.getElementById( 'navbarSupportedContent2' ).classList.remove('show');
}


/* Функция "Выезжало" */
function vyezjalo() {
    window.addEventListener('scroll', function() {
        var slidingHeader = document.getElementById('sliding-header');
        
        if (!slidingHeader) {
            return
        }
        
        var prokrutka = window.pageYOffset;
        var screenWidth = window.innerWidth;  

        if (screenWidth >= 992) {  
            if (prokrutka > 400) {
                slidingHeader.style.top = '0px';
            } else if (prokrutka <= 400) {
                slidingHeader.style.top = '-120px';
            }
        }
    });
}

// Вызываем функцию после загрузки DOM
document.addEventListener('DOMContentLoaded', vyezjalo  );
