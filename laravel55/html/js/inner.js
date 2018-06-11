// JavaScript Document
$(document).ready(function(){
$('.topArrow').click(function(){
$(this).next('ul').slideToggle();
$(this).toggleClass('downArrow')
});
});

var clicked = false;
$(".clearAll").on("click", function() {
  $(".prLeftNav input").prop("checked", !clicked);
  clicked = !clicked;
});


