<Div class="product-item float-clear filterno-{{ $filterid }} pt-4" style="clear:both;">
<div class="input-group top-bordergray mb-3 col-md-6">
<input type="checkbox" name="item_index[{{ $filterid }}]" class="pr-5">
<label class="pl-5 pr-2">Add Attribute</label>
<input type="text" required name="filter[{{ $filterid }}][name]"  placeholder="Add Attribute" class="form-control">
<i class="fa fa-plus-circle fa-2x cursorPointer pl-3 pr-3" onclick="addMoreAttribute({{ $filterid }});"></i>
<span class="success"></span>
</div>

<!-- Add Filter Attribute Section -->


		<div class="attribute attribute-{{$filterid}}">

		<!-- By Defalut one filter -->

		<div class="product-item-attribute filter-{{$filterid}}-attribute-1 float-clear clearfix ml-5" >
		<div class="input-group mb-3 col-md-4 ml-5">
		
		<input type="text" class="form-control inputfilter-{{$filterid}}-attribute ml-5" value="{{ $attrval or old('name') }}" 
			name="filter[{{$filterid}}][value][]" required placeholder="Type Attribute" >
		</div>

		</div> 

		<!-- End By Defalut One filter -->


		</div>


<!-- End Filter Attribute Section -->

<div class="btn-action">

</div>

</DIV>



