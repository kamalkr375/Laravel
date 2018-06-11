(function($) {

			          /******************                        ********************/
			                     //           Start Here               //

			         /******************                        ********************/

    // 1. Get Subcategory Dropdown By Category


    $.fn.getSubcatByCat= function(cid,url){



		$.ajax({
		   url: url,
		   data: {
		      cid: cid
		   },
		   error: function() {
		      alert('Error, Please check js');
		   },
		   dataType: 'json',
		   success: function(data) {

		   	 $("#subcatfilter").html('');

		   	var $el = $(".admin-subcat-ajax");
                    $el.empty(); // remove old options
                    $el.append($("<option></option>")
                            .attr("value", '').text('Select Subcategory'));

		   	$.each(data, function(key,value) {
		 
                        $el.append($("<option></option>")
                                .attr("value", value.id).text(value.name));
                    });		
		       
		   },
		   type: 'GET'
		});      

    }


   //2.  Get Filter & Filter Attributes by Subcategory


    $.fn.getFilterBySubcat= function(scid,url){

		 if(scid !='')
		   {

				$.ajax({
				   url: url,
				   data: {
				      subcatid: scid
				   },
				   error: function() {
				      alert('Error, Please check js');
				   },
				   dataType: 'html',
				   success: function(data) {

				   	 $("#subcatfilter").html(data);
				       
				   },
				   type: 'GET'
				});      

		     }

		}


	//3. Get State List using country code 

	
		 $.fn.getStateByCountr= function(cid,url){

		  $(".state_id").find('option').not(':first').remove();
		  
		  $(".city_id").find('option').not(':first').remove();
	   
				$.ajax({
				   url: url,
				   type: 'GET',
				   dataType: 'json',
				   success: function(data) {
 
                            $.each(data,function(index,item){
							
								 $(".state_id").append($("<option>",{value:item.id, text:item.name }));
								
							});
 
				   },
				   error: function() {
				      alert('Error, Please check js');
				   }
				});      


		}



		//4. Get City List using State code 

	
		 $.fn.getCityByState= function(cid,url){
			
		  $(".city_id").find('option').not(':first').remove();
	   
				$.ajax({
				   url: url,
				   type: 'GET',
				   dataType: 'json',
				   success: function(data) {
 
                            $.each(data,function(index,item){
							
								 $(".city_id").append($("<option>",{value:item.id, text:item.name }));
								
							});
 
				   },
				   error: function() {
				      alert('Error, Please check js');
				   }
				});      


		}


 // For Get Subcategory through category
 
  $.fn.getSubcategoryByCategory= function(cid,url){
	  
		  $(".admin_subcategory_id").find('option').not(':first').remove();
		   $(".admin_product_id").find('option').not(':first').remove();
	   
				$.ajax({
				   url: url,
				   type: 'GET',
				   dataType: 'json',
				   success: function(data) {
 
                            $.each(data,function(index,item){
							
								 $(".admin_subcategory_id").append($("<option>",{value:item.id, text:item.name }));
								
							});
 
				   },
				   error: function() {
				      alert('Error, Please check js');
				   }
				});      


		}
 
 
 // For Get product through Subcategory
 
  $.fn.getProductBySubcategory= function(cid,url){
	  
		  $(".admin_product_id").find('option').not(':first').remove();
		  $(".admin_product_id").find('option').not(':first').remove();
	   
				$.ajax({
				   url: url,
				   type: 'GET',
				   dataType: 'json',
				   success: function(data) {
 
                            $.each(data,function(index,item){
							
								 $(".admin_product_id").append($("<option>",{value:item.id, text:item.name }));
								
							});
 
				   },
				   error: function() {
				      alert('Error, Please check js');
				   }
				});      


  }
  
  //======= Get Subcategory in landing page 
  
  
  
   $.fn.getSubcategoryByCategoryInLandingPage= function(lno,url){
	  
		  $(".admin_landing_subcategory_id[data-landing-subcat='"+lno+"']").find('option').not(':first').remove();

				$.ajax({
				   url: url,
				   type: 'GET',
				   dataType: 'json',
				   success: function(data) {
 
                            $.each(data,function(index,item){
							
$(".admin_landing_subcategory_id[data-landing-subcat='"+lno+"']").append($("<option>",{value:item.id, text:item.name }));
								
							});
 
				   },
				   error: function() {
				      alert('Error, Please check js');
				   }
				});      


  }
 
 //====== Get page type 
 
   $.fn.getAdminPageType= function(url){
	   
	 
	  
		  $(".landing_page_id").find('option').not(':first').remove();
		//  $(".admin_product_id").find('option').not(':first').remove();
	   
				$.ajax({
				   url: url,
				   type: 'GET',
				   dataType: 'json',
				   success: function(data) {
 
                            $.each(data,function(index,item){
							
								 $(".landing_page_id").append($("<option>",{value:item.id, text:item.name }));
								
							});
 
				   },
				   error: function() {
				      alert('Error, Please check js');
				   }
				});       


  }
 
 
 
 
 
 
 
 
 
 

$(document.body).on("change",".admin-cat-ajax",function(){

       var cid=$(this).val();
       var actionUrl=$(this).data('catajaxurl');

      $.fn.getSubcatByCat(cid,actionUrl);

});

// For Get Filter  by Subcategory


$(document.body).on("change",".admin-subcat-ajax",function(){


     var subcid=$(this).val();

     var actionUrl=$(this).data('subcatfilterajaxurl');

     $.fn.getFilterBySubcat(subcid,actionUrl);


});


$(document.body).on("keyup",".titlename",function(){
	
	
	
	 var titlename=$(this).val();
	 
	   titlename = titlename.toLowerCase();
        titlename = titlename.replace(/[^a-zA-Z0-9]+/g,'-');
		
		 $(".nameslug").val(titlename);
	 
});


// Quantity Limitation without Inventory (Product page) 

$(document.body).on("click",".product_inventory",function(){
	
	var piv =$(this).val();
	
	 if(piv==1){ //
		 
		  $(".inventory_nqa").removeClass("hide");
	 }
	 
	 
	  if(piv==0){
		 
		  $(".inventory_nqa").addClass("hide");
		
          $(".negative_quantity_allow").prop('checked', false); 
	 }
	 
	 
	 
	
});


//======== Phone number validation 



 $(".aopcontact").keypress(function (e) {
	
	 if(e.which ==43 || e.which ==45){
		 return true;
	 }

                // console.log(e.which);

                //if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

           if(e.which >58 || (e.which>30 && e.which<48)){

                 return false;

              }

   });
   
   
   
   //=== Get state through country id 
   
  $(document.body).on("change",".admin_country_id",function(){
	  
	    var countryid=$(this).val();
        var actionUrl=$(this).data('stateajax');
		var actionUrl=actionUrl+'?cid='+countryid;
	
        $.fn.getStateByCountr(countryid,actionUrl);
  });
	

   
   //=== Get City through state id 
	   
  $(document.body).on("change",".state_id",function(){
	  
	    var countryid=$(this).val();
        var actionUrl=$(this).data('cityajax');
		var actionUrl=actionUrl+'?sid='+countryid;
        $.fn.getCityByState(countryid,actionUrl);
  });
	

	
	//===== Get Subcategory From category
	

    $(document.body).on("change",".admin_category_id",function(){
	  
			var categoryid=$(this).val();
			var actionUrl=$(this).data('subcategory');
			var actionUrl=actionUrl+'?catid='+categoryid;
			$.fn.getSubcategoryByCategory(categoryid,actionUrl);
  });

//===== Get Product From subcategory
	

   $(document.body).on("change",".admin_subcategory_id",function(){
	  
			var categoryid=$(this).val();
			var actionUrl=$(this).data('product');
			var actionUrl=actionUrl+'?subcatid='+categoryid;
			$.fn.getProductBySubcategory(categoryid,actionUrl);
  });
  
  
 //=============== Landing Page


   $(document.body).on("change",".admin_page_type",function(){
			var page_type_name=$(this).val();
			var actionUrl=$(this).data('url');
			var actionUrl=actionUrl+'?page_type='+page_type_name;
			$.fn.getAdminPageType(actionUrl);
  }); 
 
 
 
  //=============== Category Page


   $(document.body).on("change",".admin_landing_category_id",function(){
	        var landing_no =$(this).data("landing-cat");
			var categoryid=$(this).val();
			var actionUrl=$(this).data('subcategory');
			var actionUrl=actionUrl+'?catid='+categoryid;
			$.fn.getSubcategoryByCategoryInLandingPage(landing_no,actionUrl);
  }); 
 


//=========================== Untouch ============================
        
  
})(jQuery);