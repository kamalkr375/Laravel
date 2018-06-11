

<div class="product-item-attribute filter-{{$filterid}}-attribute-{{$attributeid}} float-clear clearfix ml-5" >
<div class="input-group mb-3 col-md-4 ml-5">
<input type="text" class="form-control inputfilter-{{$filterid}}-attribute ml-5" value="{{ $attrval or old('name') }}" 
	name="filter[{{$filterid}}][value][]" required placeholder="Type Attribute" >

 @if($attributeid !=1)
<i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteRowAttribute({{ $filterid }}, {{ $attributeid }});"></i>
@endif
</div>

</div> 







