
<div class="col-md-2">
<div id="mainMenu">
<div class="list-group panel">
         <a href="#vendor" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Vendor <i class="fa fa-angle-down icon"></i></a>
		<div class="collapse in" id="vendor">
		<a href="{{ route('vendor.index') }}" class="list-group-item child" id="1"><i class="fa fa-circle-o"></i> List</a>
		<a href="{{ route('vendor.create') }}" class="list-group-item child" id="2"><i class="fa fa-circle-o"></i> Add</a>
		</div>
</div>

<!--
<div class="list-group panel">
  <a href="#color" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Color <i class="fa fa-angle-down icon"></i></a>
		<div class="collapse in" id="color">
		<a href="{{ route('color.index') }}" class="list-group-item child" id="1">List</a>
		<a href="{{ route('color.create') }}" class="list-group-item child" id="2">Add</a>
		</div>
</div>

-->


<div class="list-group panel">
	<a href="#brand" class="list-group-item border-bottom" data-toggle="collapse">Brand <i class="fa fa-angle-down icon"></i></a>
			<div class="collapse" id="brand">
			<a href="{{ route('admin.brand.index') }}" class="list-group-item child">List</a>
			<a href="{{ route('admin.brand.create') }}" class="list-group-item child">Add</a>
			</div>
</div>

<div class="list-group panel">
<a href="#category" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Category <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="category">
<a href="{{ route('category.index') }}" class="list-group-item child">List</a>
<a href="{{ route('category.create') }}" class="list-group-item child">Add</a>
</div>
</div>

<div class="list-group panel">
<a href="#subcategory" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Sub Category <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="subcategory">
<a href="{{ route('admin.subcategory.index') }}" class="list-group-item child">List</a>
<a href="{{ route('admin.subcategory.create') }}" class="list-group-item child">Add</a>
</div>
</div>


<div class="list-group panel">
<a href="#gender" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Gender <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="gender">
<a href="{{ route('gender.index') }}" class="list-group-item child">List</a>
<a href="{{ route('gender.create') }}" class="list-group-item child">Add</a>
</div>
</div>


<div class="list-group panel">
<a href="#occasion" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Occasion <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="occasion">
<a href="{{ route('occasion.index') }}" class="list-group-item child">List</a>
<a href="{{ route('occasion.create') }}" class="list-group-item child">Add</a>
</div>
</div>


<div class="list-group panel">
<a href="#relation" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Relation <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="relation">
<a href="{{ route('relation.index') }}" class="list-group-item child">List</a>
<a href="{{ route('relation.create') }}" class="list-group-item child">Add</a>
</div>
</div>


<div class="list-group panel">
<a href="#product" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Product <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="product">
<a href="{{ route('product.index') }}" class="list-group-item child">List</a>
<a href="{{ route('product.create') }}" class="list-group-item child">Add</a>
</div>
</div>



<div class="list-group panel">
<a href="#affiliate" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Affiliate <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="affiliate">
<a href="{{ route('affiliate.index') }}" class="list-group-item child">List</a>
<a href="{{ route('affiliate.create') }}" class="list-group-item child">Add</a>
</div>
</div>


<div class="list-group panel">
<a href="#banners" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Banner <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="banners">
<a href="{{ route('banner.index') }}" class="list-group-item child">List</a>
<a href="{{ route('banner.create') }}" class="list-group-item child">Add</a>
</div>
</div>



<div class="list-group panel">
<a href="#locations" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Location <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="locations">

<a href="{{ route('country.index') }}" class="list-group-item child">Country List</a>
<a href="{{ route('country.create') }}" class="list-group-item child">Country Add</a>

<a href="{{ route('state.index') }}" class="list-group-item child">State List</a>
<a href="{{ route('state.create') }}" class="list-group-item child">State Add</a>


<a href="{{ route('city.index') }}" class="list-group-item child">City List</a>
<a href="{{ route('city.create') }}" class="list-group-item child">City Add</a>


</div>
</div>



<div class="list-group panel">
<a href="#productLocation" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Product Location <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="productLocation">

<a href="{{ route('product-location.index') }}" class="list-group-item child">Product Location List </a>
<a href="{{ route('product-location.create') }}" class="list-group-item child">Product Location  Add</a>

</div>
</div>


<div class="list-group panel">
<a href="#landingpage" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Landing Page <i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="landingpage">

<a href="{{ route('landingpage.index') }}" class="list-group-item child">Landing Page  </a>
<a href="{{ route('landingpage.create') }}" class="list-group-item child">Create Landing Page</a>

</div>
</div>

<!--<div class="list-group panel">
data-parent="#MainMenu">Admin User<i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="admin">
<a href="#admin" class="list-group-item border-bottom" data-toggle="collapse" <a href="{{ route('admin.dashboard') }}" class="list-group-item child">List</a>
<a href="{{ route('admin.create') }}" class="list-group-item child">Add</a>
</div>
</div>-->


<!--
<div class="list-group panel">
<a href="#career" class="list-group-item border-bottom" data-toggle="collapse" data-parent="#MainMenu">Career<i class="fa fa-angle-down icon"></i></a>
<div class="collapse" id="career">
<a href="{{ route('career.index') }}" class="list-group-item child">List</a>
<a href="{{ route('career.create') }}" class="list-group-item child">Add</a>
</div>
</div>
-->



</div> 
</div>


