@extends('layouts.admin.dashboard')
@section('content')


<div class="col-md-10 p-4 admin container" id="2Detail">
   <strong class="message">{{ Session::get('success') }}</strong>
<div class="table-responsive">
  <table class="table table-bordered table-sm">
<thead class="text-center">
<tr class="bg-gray whiteText">
  <th>Name</th>
  <th>Slug</th>
  <th>Category</th>
  <th>status</th>
  <th>Action</th>
</tr>
</thead>


  @if($data->count() > 0)

  @foreach($data as $val)
<tr>

        <td>{{ $val->name }}</td>
      <td>{{ $val->slug }}</td>
      <td>{{ $val->categorybelongsto->name }}</td>
       <td>@if($val->status)
        
             {{ 'Active'}}

           @else

            {{ 'Deactive' }}

           @endif

       </td>
        <td>  
          <a href="{{ route('admin.subcategory.edit',$val->id) }}" class="btn btn-primary a-btn-slide-text">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          <span><strong>Edit</strong></span>            
          </a> 


        <form onsubmit="return confirm('Are you sure you want to delete this ?');" action="{{ route('admin.subcategory.destroy', $val->id) }}" method="post">
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



  <!--<ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#">
        <span>&laquo;</span>
      </a>
    </li>
    <li class="page-item active1"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">
        <span>&raquo;</span>
      </a>
    </li>
  </ul>-->
  
  
</nav>
</div>
</div>
 </div>


 

@endsection