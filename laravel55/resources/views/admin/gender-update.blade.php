@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Update Gender</h1>

<form class="p-1 col-md-10 border-top mx-auto" method="post" action="{{ route('gender.update',$data->id) }}">

   {{ csrf_field() }}

     <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" name="name" required value="{{ $data->name or old('name') }}" placeholder="Name" />
</div>

@if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif

</div>




<div class="form-group col-md-6">
<label>Slug</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control nameslug" name="slug" required value="{{ $data->slug or old('slug') }}" placeholder="Slug" />
</div>
@if ($errors->has('slug'))
<span class="help-block">
    {{ $errors->first('slug') }}
</span>
@endif

</div>







<div class="form-group col-md-12">
<label>Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<textarea type="text"   name="description"  class="form-control ckeditor"  />
{{ $data->description or old('description') }}
</textarea>


</div>
  @if ($errors->has('description'))
                                    <span class="help-block">
                                        {{ $errors->first('description') }}
                                    </span>
                                @endif
</div>


<div class="form-group col-md-5">
<label>Status</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status" required>
<option value="" >--Select--</option>

   @foreach([1=>'Active',0=>'Deactive'] as $sind=>$sval)

          @if ($data->status == $sind)
                <option value="{{ $sind }}" selected > {{$sval}} </option>
          @else
               <option value="{{ $sind }}"> {{$sval}} </option>
          @endif

      @endforeach
</select>
</div>   @if ($errors->has('status'))
          <span class="help-block">
              {{ $errors->first('status') }}
          </span>
      @endif
</div>




<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>


@endsection