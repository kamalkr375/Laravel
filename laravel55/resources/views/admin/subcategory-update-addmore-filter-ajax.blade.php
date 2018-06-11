<Div class="product-item float-clear filterno-{{ $filterid }} pt-4" style="clear:both;">
<div class="input-group top-bordergray mb-3 col-md-6">
<input type="checkbox" name="item_index[{{ $filterid }}]" class="pr-5">
<label class="pl-5 pr-2">Add Attribute</label>
<input type="text" required name="filter[{{ $filterid }}][name]"  value="{{ $filterval}}"  placeholder="Add Attribute" class="form-control">
<i class="fa fa-plus-circle fa-2x cursorPointer pl-3 pr-3" onclick="addMoreAttribute({{ $filterid }});"></i>
<span class="success"></span>
</div>

<!-- Add Filter Attribute Section -->


		<div class="attribute attribute-{{$filterid}}">

		<!-- By Defalut one filter -->

	           <!-- We will not use by default attribute property  attribute -->

		<!-- End By Defalut One filter -->

		
		<!------------------- ------------------------->
		
		
		@php ($attr=0)
        
        @foreach($filter_attribute as $attrval)
@php ($attr++)
            
@include('admin.subcategory-update-addmore-filter-attribute-ajax',['filterid'=>$fno,'attributeid'=>$attr,'attrval'=>$attrval->filter_value])

        @endforeach 
		
		<!----------------------  --------------------->
		
		

		</div>


<!-- End Filter Attribute Section -->

<div class="btn-action">

</div>

</DIV>
































