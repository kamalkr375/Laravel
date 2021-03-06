@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="2Detail">
  <strong class="message">{{ Session::get('success') }}</strong>
<div class="table-responsive">
<table class="table table-bordered table-sm">
<thead class="text-center">
<tr class="bg-gray whiteText">
<th>Page Type</th>
<th>Page Type Category Name </th>
<th>Name</th>
<th>Heading Name</th>
<th>status</th>
<th>Action</th>
</tr>
</thead>


 @if($dataval->count() > 0)

@foreach($dataval as $data)
<tr>

      <td>{{ ucfirst($data->page_type) }}</td>
      <td>{{ $data->page_type_category_name }}</td>
	        <td>{{ $data->name }}</td>
      <td>{{ $data->heading_name }}</td>
      <td>@if($data->status)

      {{ 'Active'}}

      @else

      {{ 'Deactive' }}

      @endif

      </td>

      <td>  
      <a href="{{ route('landingpage.edit',$data->id) }}" class="btn btn-primary a-btn-slide-text">
      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
      <span><strong>Edit</strong></span>            
      </a> 


      <form onsubmit="return confirm('Are you sure you want to delete this ?');" action="{{ route('landingpage.destroy', $data->id) }}" method="post">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit">Delete</button>
      </form>

      </td>
</tr>

@endforeach

@endif
</table>


</div>
<div class="admin-pagination">
<div class="row">
<nav class="col-md-6">

</nav>
</div>
</div>
 </div>

@endsection