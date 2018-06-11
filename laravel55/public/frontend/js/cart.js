var cPage=window.location.href;
cPage=cPage.substr(cPage.lastIndexOf('/')+1)
$('.currentActivePage a').each(function(){
	if($(this).attr('href')==cPage){
		$(this).addClass('current')
	}
});
