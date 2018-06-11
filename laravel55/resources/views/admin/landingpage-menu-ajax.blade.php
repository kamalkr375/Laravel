<div class="container con-{{ $priority }}">
<div class="row">
<div class="form-group col-md-4">
<label>Category</label>

<select class="form-control admin_landing_category_id" name="menu[{{ $priority }}][category_id]" required   data-subcategory="{{route('product-location.getsubcategoryajax') }}" data-landing-cat='{{ $priority }}'>
 <option value="" >--Select--</option>
 @foreach($category as $cval)

             <option value="{{ $cval->id }}">{{ $cval->name }}</option>
           
 @endforeach
</select>
@if ($errors->has('category_id'))
          <span class="help-block">
              {{ $errors->first('category_id') }}
          </span>
      @endif
</div>




<div class="form-group col-md-4">
<label>Sub Category</label>
<select class="form-control admin_landing_subcategory_id" name="menu[{{ $priority }}][subcategory_id][]" required multiple  data-landing-subcat='{{ $priority }}' >
<option value="" >--Select--</option>
</select>
 @if ($errors->has('product_id'))
          <span class="help-block">
              {{ $errors->first('product_id') }}
          </span>
      @endif
</div>
	  
<div class="form-group col-md-2">
<label>check</label>
<input type="text" class="form-control" name="menu[{{ $priority }}][priority]" required value="{{ old('name') }}" placeholder="Name" />

@if ($errors->has('product_id'))
  <span class="help-block">
	  {{ $errors->first('product_id') }}
  </span>
@endif</div>


<div class="form-group col-md-2">
<i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteMenu({{ $priority }});"></i>
</div>
	  
</div>

</div>

