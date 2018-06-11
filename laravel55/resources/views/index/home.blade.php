@extends('layouts.master',
			   [
				  'meta_title'=>'Archies Onlinesss',
				  'meta_description'=>'Archies Description',
				  'meta_keyword'=>'Archies Keyword'
			   ]
		 )
		  
@push('css')
<!--  <link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap.min.css') }}"" type="text/css" />
<link rel="stylesheet" href="{{ asset('public/css/admin/admin-login.css') }}""  type="text/css" />-->
@endpush		   
@section('content')

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


@endsection







@push('js')
  <!-- <script srcx="{{ asset('public/js/frontend/jquery.mCustomScrollbar.js') }}"></script>-->
@endpush	