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
<link rel="stylesheet" href="{{ asset('public/frontend/css/inner.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/home.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/footer.css') }}" >
<link rel="stylesheet" href="{{ asset('public/frontend/css/fontawesome-all.min.css') }}" >
<link href="{{ asset('public/frontend/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/frontend/css/jquery.bxslider.css') }}" rel="stylesheet" />
<style>
ul.bxslider li{cursor:pointer;}
.value-button {
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 40px;
  text-align: center;
  background: #eee;
	line-height:40px;
}

.value-button:hover {
  cursor: pointer;
}

form #decrease {
	margin-right:-5px;
  border-radius: 25px 0 0 25px;
}

form #increase {
	margin-left:-5px;
  border-radius: 0 25px 25px 0;
}


input#number {
display: inline-block;
  width: 40px;;
  border:0;
  padding:0;
  border-top:1px solid #ddd;
  border-bottom:1px solid #ddd;
  height: 40px;
  text-align: center;
	line-height:40px;
	margin:0;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
 .fixed {    
    position:fixed;     

} 
</style>
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
     <div class="container-fluid">
      
   		<div class="container pt-5">
<div class="row">
<div class="col-sm-7">
<div class="">
<div id="product-display" class="position-fixed">
    <div class="bx-pager" style="width:150px; float:left">
      <a data-slide-index="0" href="" class="d-block pt-2"><img src="<?php echo  url('/');?>/public/frontend/https://www.archiesonline.com/upload/product/icon/Chocolaty_Birthday_Combo__CHOC1802_0_263fce12.jpg" /></a>
      <a data-slide-index="1" href="" class="d-block pt-2"><img src="<?php echo  url('/');?>/public/frontend/https://www.archiesonline.com/upload/product/icon/Chocolaty_Birthday_Combo__CHOC1802_0_263fce12.jpg" /></a>
	   <a data-slide-index="2" href="" class="d-block pt-2"><img src="<?php echo  url('/');?>/public/frontend/https://www.archiesonline.com/upload/product/icon/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg" /></a>
      <a data-slide-index="3" href="" class="d-block pt-2"><img src="<?php echo  url('/');?>/public/frontend/https://www.archiesonline.com/upload/product/icon/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg" /></a>
    </div>
<div style="width:400px;float:left">
<ul class="bxslider">
<li>
<img src='https://www.archiesonline.com/upload/product/large/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg' data-zoom-image="https://www.archiesonline.com/upload/product/large/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg" alt="Archies"  />
</li>

<!-- second slide -->
<li>
<img src='https://www.archiesonline.com/upload/product/large/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg' data-zoom-image="https://www.archiesonline.com/upload/product/large/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg" alt="Archies"/>
</li>

<!-- third row -->
<li>
<iframe width="420" height="315"
src="<?php echo  url('/');?>/public/frontend/https://www.youtube.com/embed/h9nE2spOw_o">
</iframe>
</li>

<!-- second slide -->
<li>
<img src='https://www.archiesonline.com/upload/product/large/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg' data-zoom-image="https://www.archiesonline.com/upload/product/large/Chocolaty_Birthday_Combo__CHOC1802_1_23cf9647.jpg" alt="Archies"  />
</li>

<!-- third row -->

</ul>
</div></div></div>
</div>

<div class="col-sm-5 description">
<h3>Blue Teddy Bear</h3>
<p class="size12">Code:1236985478</p>
<h4 class="red pt-2"><span class="size18">Rs</span><span > 899</span></span><span class="text-secondary size16 grayColor"> Rs 110</span> <span class="size20"> 18% off</span></span></h4>

<form>
<span>Qty </span>
  <div class="value-button mt-4" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number" value="0" />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
</form>
<button type="submit" class="btns yellowBg text-uppercase mt-4 ">Buy Now</button>
<button type="submit" class="btns shoppingBtn size18 grayColor mt-4">Add to Cart</button>
<h3 class="pt-5">Product Description</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<h3>Specification</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>
</div>

</div>
   </div>


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
<!--<script src="<?php echo  url('/');?>/public/frontend/https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="{{ asset('public/frontend/js/jquery.bxslider.js') }}"></script>
<script src="{{ asset('public/frontend/js/global.js') }}"></script>
<script src="{{ asset('public/frontend/js/inner.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.elevatezoom.js')}}"></script>
<script>
$(document).ready(function () {

    var w = $(window);

    var product = $("#product-display");
    var description = $(".description");

    w.scroll(function () {

        var windowTop = w.scrollTop();
        
        var diff = description.offset().top - windowTop + description.height();

        if(diff < product.height()) {
            var newTop = diff - product.height();

            product.animate({top: newTop},0);

        } 

    });

});

var ms=jQuery;
ms(document).ready(function(){


 $('.bxslider').bxSlider({
	pagerCustom: '.bx-pager',
onSliderLoad: function(currentIndex) {     
$('.bxslider').children().eq(currentIndex + 1).find('img').addClass('active-slide');
},
onSlideAfter: function($slideElement){
//console.log($slideElement);
$('.bxslider').children().find('img').removeClass('active-slide');
$slideElement.find('img').toggleClass('active-slide');
}
});



ms(document.body).on("mouseenter",".active-slide",function(){
		ms(this).elevateZoom({
		easing : true, 
		scrollZoom : true
		});
});
    // check where the shoppingcart-div is  


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

/*$('.active-slide').elevateZoom({
easing : true, 
scrollZoom : true
}); */




</script>
</body>
</html>
