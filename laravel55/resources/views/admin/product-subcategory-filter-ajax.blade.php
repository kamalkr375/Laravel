
<div class="form-group col-md-10">
<label>Filter Section</label>
<div class="form-group col-md-10 filter_height">

@php ($fn=0)
@php ($atr=0)

@foreach($data->filters as $fval)

@php ($fn++)
<div class="filter{{$fn}}">

<label>{{ $fval->name }}</label><br>
<div class="form-group">
<div class="form-group form-inline ml-5">

  @foreach($fval->attributes as $attrval)

  @php ($atr++)

<div class="custom-control custom-checkbox ml-3">
  <input type="checkbox" class="custom-control-input" value="{{ $attrval->id}}" name="filter[{{$fval->id}}][value][]"  id="customCheck{{$atr}}">
  <label class="custom-control-label" for="customCheck{{$atr}}">{{$attrval->filter_value}}</label>
</div>

@endforeach

</div>
</div>

</div>

@endforeach


</div>
</div>
