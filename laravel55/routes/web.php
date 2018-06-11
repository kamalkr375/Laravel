<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', function () {
    return view('product');
});



Route::get('/product-detail', function () {
    return view('product-detail');
}); */


//============ Front End ============


Route::get('/','IndexController@index');



//===============================    USER LOGIN     ======================

			Auth::routes();
			Route::get('/home', 'HomeController@index')->name('home');
			Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

//===============================     ADMIN LOGIN ======================

Route::prefix('archies-panel')->group(function(){    // Admin Session Group Url 

	// Admin Login Auth 

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/', 'AdminController@index')->name('admin.dashboard');

Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/admin/create', 'AdminController@create')->name('admin.create');

Route::post('/admin','AdminController@store')->name('admin.store');


//===== Forget Password 

Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::post('/password/reset','Auth\AdminResetPasswordController@reset');

Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showLinkRequestForm')->name('admin.password.reset');


//===== Vendor 

	Route::resource('vendor', 'VendorController');

//==== Brand

Route::get('/brand','BrandController@index')->name('admin.brand.index');

Route::get('/brand/create','BrandController@create')->name('admin.brand.create');

Route::post('/brand','BrandController@store')->name('admin.brand.store');

Route::get('/brand/{brand}/edit','BrandController@edit')->name('admin.brand.edit');

Route::put('/brand/update/{brand}','BrandController@update')->name('admin.brand.update');

Route::delete('/brand/{brand}','BrandController@destroy')->name('admin.brand.destroy');

//===== Category 

	Route::resource('category', 'CategoryController');

//====== Subcategory


Route::get('/subcategory','SubcategoryController@index')->name('admin.subcategory.index');

Route::get('/subcategory/create','SubcategoryController@create')->name('admin.subcategory.create');

Route::post('/subcategory','SubcategoryController@store')->name('admin.subcategory.store');

Route::get('/subcategory/{subcategory}/edit','SubcategoryController@edit')->name('admin.subcategory.edit');

Route::put('/subcategory/update/{subcategory}','SubcategoryController@update')->name('admin.subcategory.update');


Route::get('/subcategory/{filterid}/addmorefilterajax','SubcategoryController@addMoreFilterAjax')->name('admin.subcategory.addmorefilterajax');

Route::get('/subcategory/{filterid}/{attributeid}/addmorefilterattributeajax','SubcategoryController@addMoreFilterAttributeAjax')->name('admin.subcategory.addmorefilterattributeajax');


Route::delete('/subcategory/{subcategory}','SubcategoryController@destroy')->name('admin.subcategory.destroy');



//===== Gender 

	Route::resource('gender', 'GenderController');

//===== Color 

	Route::resource('color', 'ColorController');

//==  Occasion 

	 Route::resource('occasion','OccasionController');



//==  Relation 


Route::get('/relation','RelationController@index')->name('relation.index');

Route::get('/relation/create','RelationController@create')->name('relation.create');

Route::post('/relation','RelationController@store')->name('relation.store');

Route::get('/relation/{relation}/edit','RelationController@edit')->name('relation.edit');

Route::put('/relation/update/{relation}','RelationController@update')->name('relation.update');

Route::delete('/relation/{relation}','RelationController@destroy')->name('relation.destroy');



//==  Product 


Route::get('/product','ProductController@index')->name('product.index');

Route::get('/product/create','ProductController@create')->name('product.create');

Route::post('/product','ProductController@store')->name('product.store');

Route::get('/product/{product}/edit','ProductController@edit')->name('product.edit');

Route::put('/product/update/{product}','ProductController@update')->name('product.update');

Route::delete('/product/{product}','ProductController@destroy')->name('product.destroy');

Route::get('/product/categoryajax','ProductController@categoryajax')->name('product.categoryajax');

Route::get('/product/subcategoryfilterajax','ProductController@subcatfilterajax')->name('product.subcatfilterajax');

Route::get('/product/{priority}/imageajax','ProductController@imageajax')->name('product.imageajax');

Route::get('/product/{priority}/videoajax','ProductController@videoajax')->name('product.videoajax');

	//=============== Don't Touch Below This Line  =========

// Career 

Route::get('/career','CareerController@index')->name('career.index');

Route::get('/career/create','CareerController@create')->name('career.create');

//Route::post('/product','ProductController@store')->name('product.store');

//===== Affilicate  

	Route::resource('affiliate', 'AffiliateController');

//===== Banner

    Route::resource('banner', 'BannerController');

//===== Country  

	Route::resource('country', 'CountryController');
	
//===== State  

	Route::resource('state', 'StateController');
	
//========== City  

    Route::get('/city/getstateajax','CityController@getstateajax')->name('city.getstateajax'); //use custom function before resource
	
	Route::resource('city', 'CityController');
	
//========= ProductLocation  
	Route::get('/product-location/getcityajax','ProductLocationController@getcityajax')->name('product-location.getcityajax'); 

	Route::get('/product-location/getsubcategoryajax','ProductLocationController@getsubcategoryajax')->name('product-location.getsubcategoryajax'); 
	
  Route::get('/product-location/getproductajax','ProductLocationController@getproductajax')->name('product-location.getproductajax'); 
	
	Route::resource('product-location', 'ProductLocationController');	

//============= Landing Page 

    Route::get('/landingpage/getpagetypeajax','LandingpageController@getpagetypeajax')->name('landingpage.getpagetypeajax');
	
    Route::get('/landingpage/getsubcategoryajax','LandingpageController@getsubcategoryajax')->name('landingpage.getsubcategoryajax'); 
	
	Route::get('/landingpage/{priority}/menuajax','LandingpageController@menuajax')->name('landingpage.menuajax');
	
	Route::get('/product/{priorityimg}/imageajax','ProductController@imageajax')->name('product.imageajax');

	
	Route::resource('landingpage', 'LandingpageController');




//=====================


});
