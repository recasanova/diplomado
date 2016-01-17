$(".timeline-item").hover(function () {
    $(".timeline-item").removeClass("active");
    $(this).toggleClass("active");
    $(this).prev(".timeline-item").toggleClass("close");
    $(this).next(".timeline-item").toggleClass("close");
});

function GetCurrentPageName() { 
	//method to get Current page name from url. 
	var PageURL = document.location.href; 
	var PageName = PageURL.substring(PageURL.lastIndexOf('/') + 1); 
	 
	return PageName.toLowerCase() ;
	}
	 
	$(document).ready(function(){
	var CurrPage = GetCurrentPageName();

	console.log(CurrPage);
	 
	switch(CurrPage){
	case 'index.php':
	 $('#li_home').addClass('active') ;
	 break;
	case 'educacion.php':
	 $('#li_educacion').addClass('active') ;
	 break;
	case 'experiencia.php':
	 $('#li_experiencia').addClass('active') ;
	 break;
	case 'web.php':
	 $('#li_portafolio').addClass('active') ;
	 break;
	case 'fotografia.php':
	 $('#li_portafolio').addClass('active') ;
	 break;
	case 'contacto.php':
	 $('#li_contacto').addClass('active') ;
	 break;
	}
});

