<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Welcome to Archiesonline.com</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('public/frontend/css/header.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/global.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/home.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/footer.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/fontawesome-all.min.css') }}" >
<link href="{{ asset('public/frontend/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/frontend/css/jquery.bxslider.css') }}" rel="stylesheet" />
</head>
<body>

        	
<!--start header html-->
<div class="container-fluid head">
<div class="fullWidth yellowBg white ">
	<nav class="container clearfix">
    	<ul class="left">
        <li><a href="#">Flowers</a></li>
        <li><a href="#">Cakes</a></li>
        <li><a href="#">Personalized Gifts</a></li>
        <li><a href="#">Desi Archies</a></li>
        <li><a href="#">Corporate Gifting</a></li>
        </ul>
        <ul class="right">
        <li><a href="tel:011-4949 8888" class="tCustomer">011-4949 8888</a></li>
        
      
   <li><a href="#" class="tnotify"><span>1</span><i>Notification</i></a>
   		<!-- <ul class="account-currency-menu"  > -->
         <aside id="notifyDropDown">
         <div class="account-currency-menu content"  id="content_2">
             <ul class="mr-3">
                <li class="pt-3 pb-3"> <a href="#">Special Birthday Combo Offer 10% discount on products</a></li>
                <li class="pt-3 pb-3"><a href="#"> Buy Window To My Heart Chocolate Box-Lilac and get 1 free</a></li>    
                <li class="pt-3 pb-3"><a href="#">Teddy Chocolate Pink- New product on archies </a></li>    
                 <li class="pt-3 pb-3"><a href="#">Special Birthday Combo Offer 10% discount on products</a></li>
                <li class="pt-2 pb-3"><a href="#"> Buy Window To My Heart Chocolate Box-Lilac and get 1 free</a></li>    
                <li class="pt-3 pb-3"><a href="#">Teddy Chocolate Pink- New product on archies </a></li>    
                 <li class="pt-3 pb-3"><a href="#">Special Birthday Combo Offer 10% discount on products</a></li>
                <li class="pt-3 pb-3"><a href="#"> Buy Window To My Heart Chocolate Box-Lilac and get 1 free</a></li>    
                <li class="pt-3 pb-3"><a href="#">Teddy Chocolate Pink- New product on archies </a></li>    
                </ul> 
                </div>
                <p class="text-center"><a href="#" class="red">View All Notifications </a></p>  
       </aside>
           
        </li>
      <li> <a href="javascript:void(0)" class="myAccount"><i>My Account</i></a>
      <aside style="display:none">
        	<ul class="account-currency-menu">            
                <li><a href="#">My Profile</a></li>
                <li><a href="#">My Reminders</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Changed Password </a></li>
                <li><a href="#">Logout </a></li>
            </ul>
            </aside>
        </li>
          <li><a href="#" class="currency"><span></span><i>Currency</i> </a>
          <aside id="currencyDropDown" style="display:none">
         <ul class="account-currency-menu">
                <li><a href="#">INR</a></li>
                <li><a href="#">USD</a></li>    
          </ul>
          </aside>
         </li>
          <li><a href="#" class="cart"><span>1</span> <i>Cart</i> </a>
          <aside id="cart" >
          	<div class="contentCart" id="content_1">
             <p class="pt-2 pb-2 mb-0 mr-3 grayColor clearfix cursor-pointer"><img src="<?php echo  url('/');?>/public/frontend/images/products/20.jpg" class="float-left"> <span class="size16 pt-3  pr-3 pl-2 float-left">Romance Cherry</span> <span class="red float-right pr-3 pt-3">Rs 599</span></p>
               
                 <p class="pt-2 pb-2 mb-0 mr-3 grayColor clearfix cursor-pointer"><img src="<?php echo  url('/');?>/public/frontend/images/products/21.jpg" class="float-left"> <span class="size16 pt-3  pr-3 pl-2 float-left">Note Hydra Color 13 Fiesta...</span> <span class="red float-right pr-3 pt-3">Rs 599</span></p>
                   <p class="pt-2 pb-2 mb-0 mr-3 grayColor clearfix cursor-pointer"><img src="<?php echo  url('/');?>/public/frontend/images/products/22.jpg" class="float-left"> <span class="size16 pt-3  pr-3 pl-2 float-left">Holi Hai Personalised Mug</span> <span class="red float-right pr-3 pt-3">Rs 599</span></p>
                    <p class="pt-2 pb-2 mb-0 mr-3 grayColor clearfix cursor-pointer"><img src="<?php echo  url('/');?>/public/frontend/images/products/23.jpg" class="float-left"> <span class="size16 pt-3  pr-3 pl-2 float-left">Pie Of Affection</span> <span class="red float-right pr-3 pt-3">Rs 599</span></p>
                     <p class="pt-2 pb-2 mb-0 mr-3 grayColor clearfix cursor-pointer"><img src="<?php echo  url('/');?>/public/frontend/images/products/21.jpg" class="float-left"><span class="size16 pt-3  pr-3 pl-2 float-left">Note Hydra Color 13 Fiesta...</span> <span class="red float-right pr-3 pt-3">Rs 599</span></p>
                     </div>
                     <p class="pt-3 pb-3 grayColor pl-3 mr-3">Total Price<span class="red float-right pr-3">Rs 599</span></p>
                     <p class="text-center"><a href="#" class="viewBag">View Bag</a></p>
       </aside>
          </li>  
        </ul>
    </nav>
</div>

	<header class="container">
    <ul class="logoNsearch">
    	<li class="archiesLogo"><img src="<?php echo  url('/');?>/public/frontend/images/logo.png" ></li>
      <li class="searchBox"><input type="text" placeholder="Search Product"><button class="search"><img src="<?php echo  url('/');?>/public/frontend/images/search.png" width="20" height="20" alt="Search"></button></li>
        </ul>
        <p class="clearfix"> </p>	
        <p class="menuIcon  text-uppercase"><a href="#"><span></span><span></span><span></span><i>Menu</i></a></p>
        <ul class="menuItem">
        	<li><a href="#"><span data-hover="Rakhi Special">Rakhi Special</span></a>
            	<div>
                	<aside>
                       <p><a href="#">Gifts by Relation</a></p><a href="/shop/anniversary/husband">Husband</a><a href="/shop/anniversary/wife">Wife</a><a href="/shop/anniversary/parents">Parents</a><a href="/shop/anniversary/couple">Couple</a>
                    </aside>
                    <aside>
                           <p><a href="#">Jewellery</a></p><a href="/shop/anniversary/jewellery/neckpiece">Neckpieces</a><a href="/shop/anniversary/jewellery/earrings">Earrings</a><a href="/shop/anniversary/jewellery/bracelet">Bracelets</a><a href="/shop/anniversary/jewellery/rings">Rings</a><a href="/shop/anniversary/jewellery/jewellery-box">Jewellery Box</a>
                    </aside>
                    <aside>
                       <p><a href="/shop/anniversary/home-decor">Home Decor</a></p><a href="/shop/anniversary/home-decor/buddha-special">Buddha Collection</a><a href="/shop/anniversary/home-decor/ganesha-special">Ganesha Collection</a><a href="/shop/anniversary/mugs-and-sippers">Mugs &amp; Sippers</a><a href="/shop/anniversary/home-decor/photoframes">Photoframes</a><a href="/shop/anniversary/home-decor/desk-accessories">Desk Accessories</a><a href="/shop/anniversary/home-decor/clocks">Clocks</a><a href="/shop/anniversary/home-decor/cushions">Cushions</a><a href="/shop/anniversary/home-decor/lamps-&amp;-Lanterns">Lamp &amp; Lanterns</a><a href="/shop/anniversary/home-decor/wall-hangings">Wall Hangings</a>
                    </aside>
                    <aside>
                       <p><a href="#">Fashion Accessories</a></p>
                       <a href="/shop/anniversary/fragrances">Fragrances</a>
                       <a href="/shop/accessories/wallets">Wallets</a>
                       <a href="/shop/accessories/watches">Watches</a>
                    </aside>
                     <aside>
                        <p><a href="/anniversary">Anniversary Hampers</a></p>
                        <p><a href="/shop/anniversary/personalised-gifts">Personalised Gifts</a></p>
                        <p><a href="/shop/anniversary/greeting-cards">Greeting Cards</a></p>
                        <p><a href="/shop/anniversary/chocolates">Chocolates Hampers</a></p>
                        <p><a href="/shop/anniversary/flowers">Flowers</a></p>
                    </aside>
                </div>
            </li>
            <li><a href="#"><span data-hover="Birthday Gifts">Birthday Gifts</span></a></li>
            <li><a href="#"><span data-hover="Anniversary Gifts">Anniversary Gifts</span></a></li>
            <li><a href="#"><span data-hover="Occasions">Occasions</span></a></li>
            <li><a href="#"><span data-hover="Relationship">Relationship</span></a></li>
            <li><a href="#"><span data-hover="Same Day Delivery">Same Day Delivery</span></a></li>
        </ul>
    
  </header>
  <div class="categoryMenu">
  <div class="container-fluid grayBg pt-3 pb-3">
  		<div class="container">
        	<ul>
            	<li class="activeCategoryMenu"><a href="#" class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/forHer.png"> Gifts for Her</a>
                <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Flowers & Cakes </a></p>
                            <a href="#">Cakes</a>
                            <a href="#">Designer Cakes</a>
                            <a href="#">Glass Vase Arrangements</a>
                            <a href="#">Flowers with Teddy</a>
                            <a href="#">Flowers with Chocolates</a>
                            <a href="#">Flowers with Cake</a>
                            <a href="#">Flower Arrangements</a>
                            <a href="#">Flower Bunches</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Personalized Gifts </a></p>
                            <a href="#">Mugs & Sippers</a>
                            <a href="#">Bags & Wallets</a>
                            <a href="#">Pen</a>
                            <a href="#">Posters</a>
                            <a href="#">Card Holders</a>
                            <a href="#">Cushions</a>
                            <a href="#">Personalised Card</a>
                            <a href="#">Keychain</a>
                            <a href="#">Collage Photo Frames</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Accessories </a></p>
                            <a href="#">Sunglasses</a>
                            <a href="#">Cufflinks</a>
                            <a href="#">Wallets</a>
                            <a href="#">Bags</a>
                            <a href="#">Watches</a>
                            <a href="#">Key Chains</a>

                    </aside>
                    
                    </div>
                </li>
                <li><a href="#" class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/forHim.png">Gifts for Him</a>
                	<div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Flowers & Cakes </a></p>
                            <a href="#">Cakes</a>
                            <a href="#">Designer Cakes</a>
                            <a href="#">Glass Vase Arrangements</a>
                            <a href="#">Flowers with Teddy</a>
                            <a href="#">Flowers with Chocolates</a>
                            <a href="#">Flowers with Cake</a>
                            <a href="#">Flower Arrangements</a>
                            <a href="#">Flower Bunches</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Personalized Gifts </a></p>
                            <a href="#">Mugs & Sippers</a>
                            <a href="#">Bags & Wallets</a>
                            <a href="#">Pen</a>
                            <a href="#">Posters</a>
                            <a href="#">Card Holders</a>
                            <a href="#">Cushions</a>
                            <a href="#">Personalised Card</a>
                            <a href="#">Keychain</a>
                            <a href="#">Collage Photo Frames</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Accessories </a></p>
                            <a href="#">Sunglasses</a>
                            <a href="#">Cufflinks</a>
                            <a href="#">Wallets</a>
                            <a href="#">Bags</a>
                            <a href="#">Watches</a>
                            <a href="#">Key Chains</a>

                    </aside>
                    
                    </div>
                </li>
            <li><a href="#"  class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/anniversary.png">Wedding Gifts</a>
            <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                   
                    </div></li>
            <li><a href="#"  class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/softToys.png">Soft Toys</a>  <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                   
                    </div></li>
            <li><a href="#"  class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/greetingCards.png">Greeting Cards</a>  <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                   
                    </div></li>
            <li><a href="#"  class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/flowers.png">Flowers & Cakes</a>  <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                   
                    </div></li>
            <li><a href="#"  class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/personalised.png">Personalized Gifts</a>
            	  <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                   
                    </div>
            </li>
            <li><a href="#"  class="categoryBdr"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/accessories.png">Accessories</a>  <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                   
                    </div></li>
            <li><a href="#"  class="categoryBdr"> <img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/jewellery.png">Jewellery</a> <div>
                    <aside>
                    	<p><a href="#">Combos & Hampers</a></p>
                            <a href="#">Birthday Hampers</a>
                            <a href="#">Anniversary Hampers</a>
                            <a href="#">Soft Toy Hampers</a>
                            <a href="#">Stationery Hampers</a>
                            <a href="#">Chocolate Hampers</a>
                            <a href="#">Home Decor Hampers</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Flowers & Cakes </a></p>
                            <a href="#">Cakes</a>
                            <a href="#">Designer Cakes</a>
                            <a href="#">Glass Vase Arrangements</a>
                            <a href="#">Flowers with Teddy</a>
                            <a href="#">Flowers with Chocolates</a>
                            <a href="#">Flowers with Cake</a>
                            <a href="#">Flower Arrangements</a>
                            <a href="#">Flower Bunches</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Personalized Gifts </a></p>
                            <a href="#">Mugs & Sippers</a>
                            <a href="#">Bags & Wallets</a>
                            <a href="#">Pen</a>
                            <a href="#">Posters</a>
                            <a href="#">Card Holders</a>
                            <a href="#">Cushions</a>
                            <a href="#">Personalised Card</a>
                            <a href="#">Keychain</a>
                            <a href="#">Collage Photo Frames</a>
                    </aside>
                    <aside>
                    	<p><a href="#">Accessories </a></p>
                            <a href="#">Sunglasses</a>
                            <a href="#">Cufflinks</a>
                            <a href="#">Wallets</a>
                            <a href="#">Bags</a>
                            <a href="#">Watches</a>
                            <a href="#">Key Chains</a>

                    </aside>
                    
                    </div></li>
            <!--<li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/forHim.png">Gifts for Him</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/anniversary.png">Wedding Gifts</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/softToys.png">Soft Toys</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/greetingCards.png">Greeting Cards</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/flowers.png">Flowers & Cakes</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/personalised.png">Personalized gifts</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/accessories.png">Accessories</a></li>
            <li><a href="#"><img src="<?php echo  url('/');?>/public/frontend/images/menuIcon/jewellery.png">Jewellery</a></li> -->
            </ul>
        </div>
  </div></div>
 
     <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="archiesSliders">
<ul class="homeSlider">
		<li><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/slider1.jpg"><p class="sliderText text-center"><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/text.png" class="text-center" ></p>
    <div class="bx-pager"><a data-slide-index="2" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="leftThumb" /></a><a data-slide-index="1" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="rightThumb" /></a></div></li>
    <li><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/slider2.jpg"><p class="sliderText text-center"><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/text.png" class="text-center" ></p>
     <div class="bx-pager"><a data-slide-index="1" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="leftThumb" /></a><a data-slide-index="2" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="rightThumb" /></a></div></li>
    <li><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/slider3.jpg"><p class="sliderText text-center"><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/text.png" class="text-center" ></p>
     <div class="bx-pager"><a data-slide-index="2" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="leftThumb" /></a><a data-slide-index="0" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="rightThumb" /></a></div></li> 
     <li><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/slider1.jpg"><p class="sliderText text-center"><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/text.png" class="text-center" ></p>
    <div class="bx-pager"><a data-slide-index="2" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="leftThumb" /></a><a data-slide-index="1" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="rightThumb" /></a></div></li>
    <li><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/slider2.jpg"><p class="sliderText text-center"><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/text.png" class="text-center" ></p>
     <div class="bx-pager"><a data-slide-index="1" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="leftThumb" /></a><a data-slide-index="2" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="rightThumb" /></a></div></li>
    <li><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/slider3.jpg"><p class="sliderText text-center"><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/text.png" class="text-center" ></p>
     <div class="bx-pager"><a data-slide-index="2" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="leftThumb" /></a><a data-slide-index="0" href=""><img src="<?php echo  url('/');?>/public/frontend/images/home/slider/thumb1.jpg"  class="rightThumb" /></a></div></li> 
</ul>
</div>
<div class="container-fluid">

<div class="">
	<section class="giftUnder">
    <ul>
    	<li>
   	    <img src="<?php echo  url('/');?>/public/frontend/images/home/bannerProduct1.png" alt="Gifts Under 399" /> 
        	<aside>
            	<p class="text-uppercase">Gifts Under</p>
                <p class="red"><span>Rs.</span> 399</p>
                <p class="grayColor"><a href="#">Buy Now</a></p>
            </aside>
        </li>
        <li>
   	    <img src="<?php echo  url('/');?>/public/frontend/images/home/bannerProduct2.png" alt="Gifts Under 699" /> 
        	<aside>
            	<p class="text-uppercase">Gifts Under</p>
                <p class="red"><span>Rs.</span> 699</p>
                <p class="grayColor"><a href="#">Buy Now</a></p>
            </aside>
        </li>
        <li>
   	    <img src="<?php echo  url('/');?>/public/frontend/images/home/bannerProduct3.png" alt="Gifts Under 399" /> 
        	<aside>
            	<p class="text-uppercase">Gifts Under</p>
                <p class="red"><span>Rs.</span> 999</p>
                <p class="grayColor"><a href="#">Buy Now</a></p>
            </aside>
        </li>
        <li>
   	    <img src="<?php echo  url('/');?>/public/frontend/images/home/bannerProduct4.png" alt="Gifts Under 399" /> 
        	<aside>
            	<p class="text-uppercase">Gift Above</p>
                <p class="red"><span>Rs.</span> 999</p>
                <p class="grayColor"><a href="#">Buy Now</a></p>
            </aside>
        </li>
    </ul>
    </section>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid">
<section class=" homePrSlider pt-5">
	<h2 class="text-center pb-3">Hot <i class="red bb-red">Seller</i></h2>
<ul class="hotsellerSlider text-center">
	<li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/20.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Romance Cherry</p>
    <p class="red size26">Rs 399</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/21.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Note Hydra Color 13 Fiesta...</p>
    <p class="red size26">Rs 575</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/22.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Holi Hai Personalised Mug</p>
    <p class="red size26">Rs 349</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/23.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Pie Of Affection</p>
    <p class="red size26">Rs 2745</p>
    </li>
     <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/23.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Pie Of Affection</p>
    <p class="red size26">Rs 2745</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/23.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Pie Of Affection</p>
    <p class="red size26">Rs 2745</p>
    </li>
    
    	
</ul>
</section>

<section class="container-fluid homePrSlider pt-5">
	<h2 class="text-center pb-3">Personalised  <i class="red bb-red">Gifts</i></h2>
<ul class="personalisedSlider text-center">
	<li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/24.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Romance Cherry</p>
    <p class="red size26">Rs 399</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/25.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Note Hydra Color 13 Fiesta...</p>
    <p class="red size26">Rs 575</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/26.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Holi Hai Personalised Mug</p>
    <p class="red size26">Rs 349</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/27.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Pie Of Affection</p>
    <p class="red size26">Rs 2745</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/24.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Romance Cherry</p>
    <p class="red size26">Rs 399</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/25.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Note Hydra Color 13 Fiesta...</p>
    <p class="red size26">Rs 575</p>
    </li>
    	
</ul>
</section>


<div class="clearfix"></div>
</div>
</div>
<section class="container-fluid pt-5 pb-5 grayBg">

<div class="container text-center">
<h2>Shop By <i class="red bb-red">Categories</i></h2>
<ul class=" homeCategoryBox">
	<li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/homeDecor.png" /><br/>Home Decor</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/mugs-sippers.png" /><br/>Mugs & Sippers</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/flowers.png" /><br/>Flowers</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/jewellery.png" /><br/>Jewellery</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/accessors.png" /><br/>Accessories</a></li>
    </ul>
    <ul class=" homeCategoryBox">
 <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/greeting-cards.png" /><br/>Greeting Cards</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/personlised-gifts.png" /><br/>Personalised Gifts</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/stationery.png" /><br/>Stationery</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/chocolates.png" /><br/>Chocolates</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/balloon.png" /><br/>Balloon Bouquets</a></li> 
</ul>

<ul class=" homeCategoryBox">
 <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/bar.png" /><br/>Glass</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/cakes.png" /><br/>Cakes</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/fragrances.png" /><br/>Fragrances</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/kids-world.png" /><br/>Kids World</a></li>
    <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/kitchen-dining.png" /><br/>Kitchen & dining</a></li> 
</ul>
<ul class=" homeCategoryBox">
 <li><a href="#" class="grayText"><img src="<?php echo  url('/');?>/public/frontend/images/icon/watches.png" /><br/>Watches</a></li>
   
</ul>
</div>
</section>

<section class="container-fluid pt-5 pb-5 hfindGifts">


<h2 class="text-center">Find <i class="red bb-red">Gifts</i></h2>
	<div class="row">
    <div class="col-sm-6">
    <p class="d-inline-block"><img src="<?php echo  url('/');?>/public/frontend/images/home/forMen.jpg"  alt="For Men" ><a href="#" class="formanBtn">Buy Now</a></p>
    	<aside class="size22 bb-gray forMen d-inline-block align-bottom mb-5">For<br/> <span class="yellow size30 text-uppercase">Men</span></aside>
        
    </div>
    <div class="col-sm-6 pull-right text-right">
    <aside class="size22 bb-gray forWomen d-inline-block align-top mt-5 text-right">For<br/> <span class="yellow size30 text-uppercase">Women</span></aside>
    <p class="d-inline-block"> <img src="<?php echo  url('/');?>/public/frontend/images/home/forWomen.jpg" alt="For Women" ><a href="#" class="forWomanBtn">Buy Now</a></p>
    
    </div> 
    </div>

</section>

<section class="container-fluid homePrSlider pt-5">
	<h2 class="text-center pb-3"><i class="red bb-red">Last Viewed</i>  Gifts</h2>
<ul class="lastviewdSlider text-center">
	<li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/24.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Romance Cherry</p>
    <p class="red size26">Rs 399</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/25.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Note Hydra Color 13 Fiesta...</p>
    <p class="red size26">Rs 575</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/26.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Holi Hai Personalised Mug</p>
    <p class="red size26">Rs 349</p>
    </li>
    <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/27.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Pie Of Affection</p>
    <p class="red size26">Rs 2745</p>
    </li>
     <li> <picture><img src="<?php echo  url('/');?>/public/frontend/images/products/27.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"><i class="prOverlay"></i> <p  class="text-center text-uppercase prBtn"><a href="#">Buy Now</a></p></picture>    
    <p class="size20 mb-0 mt-2">Pie Of Affection</p>
    <p class="red size26">Rs 2745</p>
    </li>
    	
</ul>
</section>
<section class="container-fluid pt-5">
<div class="row"><!-- align-items-center-->
	<div class="col-sm-7 blogBg">
    <aside class="blogText text-right">
    	<h3 class="red">Best Gifts for Birthday</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
      <p><a href="http://blog.archiesonline.com/" class="" target="_blank">Read Blog</a></p>
      </aside>
    </div>
    <div class="col-sm-5 float-right text-right">
    <img src="<?php echo  url('/');?>/public/frontend/images/home/flowerBanner.jpg" class="mb-3">
    <img src="<?php echo  url('/');?>/public/frontend/images/home/corporateBanner.jpg" ></div>
</div>
</section>
<ul  class="productList" style="display:none">
	<li> <img src="<?php echo  url('/');?>/public/frontend/images/products/1.jpg" alt="Archies" srcset="images/products/1BigDouble.jpg 2x"> </li>
    <li> <img src="<?php echo  url('/');?>/public/frontend/images/products/2.jpg" alt="" srcset="images/products/2BigDouble.jpg 2x"> </li>
    <li> <img src="<?php echo  url('/');?>/public/frontend/images/products/3.jpg" alt="" srcset="images/products/3BigDouble.jpg 2x"> </li>
    <li> <img src="<?php echo  url('/');?>/public/frontend/images/products/4BigDouble.jpg" alt="" srcset="images/products/4BigDouble.jpg 2x"> </li>  
    	
</ul>


<!--end header html-->
<!--start footer html-->
<div class="clearfix"></div>
<footer class="container-fluid">
	<section class="container newsletterNsco clearfix bt-gray  pt-5">
    	<aside class="newsletter">
        	<p class="fHeading "><span class="red text-uppercase">Join our Newsletter </span><br/>for more updates & offers!</p>
            <p><input type="text" placeholder="Enter Your Email" /></p>
           <p> 	<button class="btns yellowBg text-uppercase">Subscribe Now</button> </p>
           
        </aside>
        <aside class="socialIcon">
        	<p class="fHeading text-uppercase red">Connect With Us</p>
            <p class="socialLink pt-1" style="display:none"><a href="https://www.facebook.com/ArchiesOnline?ref=mf" target="_blank" rel="nofollw"><i class="fab fa-facebook fa-3x"></i></a>
            <a href="https://twitter.com/Archies_Online" target="_blank" rel="nofollw"><i class="fab fa-twitter fa-3x"></i></a>
            <a href="https://www.youtube.com/user/maninderarchies" target="_blank" rel="nofollw"><i class="fab fa-youtube fa-3x"></i></a>
            <a href="https://www.pinterest.com/archiesonline/" target="_blank" rel="nofollw"><i class="fab fa-pinterest fa-3x"></i></a>
            <a href="https://instagram.com/archiesonline" target="_blank" rel="nofollw"><i class="fab fa-instagram fa-3x"></i></a>
           </p>
            <p class="socialLink mt-1"><a class="fb" href="https://www.facebook.com/ArchiesOnline?ref=mf" target="_blank" rel="nofollw"><span>Facebook</span></i></a>
             <a class="tw" href="https://twitter.com/Archies_Online" target="_blank" rel="nofollw"><span>Twitter</span></i></a>
            <a charset="youTube" href="https://www.youtube.com/user/maninderarchies" target="_blank" rel="nofollw"><span>You Tube</span></i></a>
            <a class="pintrest" href="https://www.pinterest.com/archiesonline/" target="_blank" rel="nofollw"><span>Pintrest</span></i></a>
            <a class="instragram" href="https://instagram.com/archiesonline" target="_blank" rel="nofollw"><span>Instagram</span></i></a>
            
        </aside>
        
    </section>
    <div class="clearfix"></div>
	<section class="seoContent mt-5 size16">
    	<div class="container">
   	  <h1>Welcome to Archies Online! </h1>
      <h2>A Holistic Boutique of Timeless Expressions </h2>
      <p>Archies presents an exhaustive collection of exclusive gifts and greeting cards to help you express your deepest feelings for your loved ones. In today's increasingly hurried times, we get so engrossed in making a living that we almost forget to appreciate the real blessings in our lives - our people. Whether we talk about our moms who brave countless sleepless nights after we are born or that best friend who is always by our side through thick and thin, it would be safe to say that our existence wouldn't be the same if it weren't for our loved ones. Now is the time to let them know how you feel, without saying a word, through a range of exciting online gift ideas put together by our team of experts. Every gift listed with us not only qualifies the stringent quality benchmarks that have been synonymous with the Archies brand, but also encapsulates all the emotions you may need to convey your feelings, just the way you want.</p>
      <h2>Celebrating Human Feelings and Emotions </h2>
        <p>Archies Online is a one-stop-shop to buy the perfect gifts for the ones you hold close to your heart. Whether you are looking for a birthday gift for an old friend or a Valentine's Day token for the love of your life, we have got you covered. Our team of experts understand the variance of human emotions and spend countless hours in putting together thoughtful gifts that help you express your feelings to your loved ones. We <a href="#">truly believe</a> that every human relationship is unique, with every person in our life holding an indispensable place that calls for a unique appreciation, and we, at Archies, are here to make that happen. Committed to serving as the go-to destination to buy and send gifts online, we carry a comprehensive range of gifts and greetings covering every aspect of human emotion worth cherishing.</p>
       
        <div class="seoMoreContent">
        	<p>Archies Online is a one-stop-shop to buy the perfect gifts for the ones you hold close to your heart. Whether you are looking for a birthday gift for an old friend or a Valentine's Day token for the love of your life, we have got you covered. Our team of experts understand the variance of human emotions and spend countless hours in putting together thoughtful gifts that help you express your feelings to your loved ones. We <a href="#">truly believe</a> that every human relationship is unique, with every person in our life holding an indispensable place that calls for a unique appreciation, and we, at Archies, are here to make that happen. Committed to serving as the go-to destination to buy and send gifts online, we carry a comprehensive range of gifts and greetings covering every aspect of human emotion worth cherishing.</p>
          
        </div>
         <p class="seoToggle"><a href="javascript:void(0)">More</a></p>
        </div>
    </section>
    <section class="paymentOption container pt-5 pb-5 text-center">
    	<p><span class="red">Payment Option</span>
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/visa.png"  alt="Visa">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/mster.png" alt="Master Card">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/mestro.png" alt="Mestro">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/american.png"  alt="American Express">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/freecharge.png" alt="Freecharge">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/mobikwik.png" alt="Mobikwik">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/paypal.png" alt="Paypal">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/paytm.png" alt="Paytm">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/payumoney.png" alt="PayUmoney">
        <img src="<?php echo  url('/');?>/public/frontend/images/paymentOption/airtel.png" alt="Airtel"></p>
    </section>
    <section class="footerLink container pt-5 pb-b bt-gray grayColor">
    	<div>
        	<ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">Track your order</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Delivery & Shipping</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Terms & Conditions</a></li>

            </ul>
            
        </div>
        	<div>
        	<ul>
            <li><a href="#">Gifts for Her</a></li>
            <li><a href="#">Gifts for Him</a></li>
            <li><a href="#">Wedding Gifts</a></li>
            <li><a href="#">Personalized Gifts</a></li>
            <li><a href="#">Greeting Cards</a></li>
            <li><a href="#">Soft Toys</a></li>
            </ul>
            
        </div>
        	<div>
        	<ul>
                <li><a href="#">For Husband</a></li>
                <li><a href="#">For Wife</a></li>
                <li><a href="#">For Girlfriend</a></li>
                <li><a href="#">For Boyfriend</a></li>
                <li><a href="#">For Mother</a></li>
                <li><a href="#">For Father</a></li>
                <li><a href="#">For Brother</a></li>
            </ul>
            
        </div>
        	<div>
        	<ul>
                <li><a href="#">Wedding Gifts</a></li>
                <li><a href="#">Birthday Gifts</a></li>
                <li><a href="#">Anniversary Gifts</a></li>
                <li><a href="#">Love &amp; Romance</a></li>
                <li><a href="#">Sorry</a></li>
                <li><a href="#">Thank You</a></li>
                <li><a href="#">Get Well Soon</a></li>
                <li><a href="#">Congratulations</a></li>
                <li><a href="#">Festivals</a></li>
            </ul>
            
        </div>
    <div>
        	<ul>
                <li><a href="#">Flowers</a></li>
                <li><a href="#">Home Decor</a></li>
                <li><a href="#">Mugs & Sippers</a></li>
                <li><a href="#">Greeting Cards</a></li>
                <li><a href="#">Personalized Gifts</a></li>
                <li><a href="#">Stationery</a></li>
                <li><a href="#">Chocolate</a></li>
            </ul>
            
        </div>
        <p class="clearfix"></p>
        <p class="bt-gray bb-gray mt-5 pt-3 pb-3 text-center"><span class="red">Customer Care :</span> <span class="phone"><a class="reverse" href="tel:011-4949 8888">011-4949 8888</a></span><span class="dateTime"> Mon. to Sat. 9:30 am to 06:00 pm (IST)</span></p>
    </section>
    <section class="footerPanel container">
    	<aside class="">
   	    <img src="<?php echo  url('/');?>/public/frontend/images/logoGray.png" width="183" height="53" alt="Archies"> 
        <p class="fGeneralLink mt-2 grayColor"><a href="#">About Archies</a><a href="#"> Media </a><a href="#"> Investors </a><a href="#"> Franchise </a><a href="#"> Code of Conduct </a><a href="#"> Careers </a><a href="#"> Contact Us </a></p>
        </aside>
        <aside class="mt-2">&copy; 2018. Archies Limited
        <p class="mt-2 text-center"><a href="http://www.finesseim.com" rel="nofollow" target="_blank"><img src="<?php echo  url('/');?>/public/frontend/images/finesseLogo.png" alt="Finesse Interactive" width="68" height="24"></a>
        </aside>
    </section>
</footer>
<!--end footer html-->
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="{{ asset('public/frontend/js/jquery.bxslider.js') }}"></script>
<script src="{{ asset('public/frontend/js/global.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.mCustomScrollbar.js') }}"></script>
<script>
		
		
	</script>
</body>
</html>