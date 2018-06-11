
(function(){

	
/*var menu = document.getElementById('mainMenu');
var icon = document.getElementById('icon');
var open = false;
menu.addEventListener('click', function(){
if(open){
icon.className = 'fa fa-angle-down';  
} else{
icon.className = 'fa fa-angle-down open';
}open = !open;
});

*/

//=========== Toggle Navigation Side bar


$.fn.sideMenu=function(){
	
           $(this).find('i.icon').toggleClass('open');
		 /*  $(this).$('div.collapse').removeClass('show'); */

};

//=========== Input Image in form
function Enter_image(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			var nextEI=$(input).next('.enter_image');
            nextEI.attr('src', e.target.result);
			nextEI.attr('width','50px');
			nextEI.attr('height','50px');
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".imgInp").change(function(){
    Enter_image(this);
});

//===================







//============ Don't Touch below under this line 



	
})(document);



jQuery(document).ready(function () {

	 var ao= jQuery;
  
	ao(document.body).on("click","#mainMenu .list-group",function(){
		
	       ao(this).sideMenu();
	});
	
//========Find Id of Menu=====

$('#colorpicker').on('change', function() {
	$('#hexcolor').val(this.value);
});
$('#hexcolor').on('change', function() {
  $('#colorpicker').val(this.value);
});

//=========pagination

$(function() {
	CKEDITOR.replace( 'editor1' );
      $( 'ul.pagination li a' ).on( 'click', function() {
            $( this ).parent().find( 'li.active1' ).removeClass( 'active1' );
            $( this ).addClass( 'active1' );
      });
});

//======end pagination
$('.Icon').click(function(){
$(this).toggleClass('open')
$('#mainMenu').toggleClass('open1');
});

$('.log a').click(function(){
$('.logout').toggle();
});

//===========



//============== End 

});
