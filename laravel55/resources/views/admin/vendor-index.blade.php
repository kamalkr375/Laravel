@extends('layouts.admin.dashboard')
@section('content')


<div class="col-md-10 p-4 admin container" id="2Detail">
   <strong class="message">{{ Session::get('success') }}</strong>
<div class="table-responsive">
  <table class="table table-bordered table-sm">
<thead class="text-center">
<tr class="bg-gray whiteText">
 <th>Name</th>
<th>Address</th>
<th>Phone Number</th>
<th>Website</th>
<th>Action</th>
</tr>
</thead>


  @if($vendor->count() > 0)

@foreach($vendor as $user)
<tr>

<td>{{ $user->name }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->phone_number }}</td>
        <td>{{ $user->website }}</td>
        <td>  
          <a href="{{ route('vendor.edit',$user->id) }}" class="btn btn-info btn-flat a-btn-slide-text">
          
          <span><strong><i class="fa fa-edit"></i> Edit</strong></span>            
          </a> 


        <form onsubmit="return confirm('Are you sure you want to delete this ?');" action="{{ route('vendor.destroy', $user->id) }}" method="post" class="d-inline">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-flat btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
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

{{ $vendor->links() }}

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