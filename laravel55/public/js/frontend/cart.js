var cPage=window.location.href;
cPage=cPage.substr(cPage.lastIndexOf('/')+1)
$('.currentActivePage a').each(function(){
	if($(this).attr('href')==cPage){
		$(this).addClass('current')
	}
});
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value > 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

//$(document).ready(function(){
	
$('.removeCartItem span').click(function(){
//	alert('hi')
$(this).closest('.cartBox').hide()
});
//});