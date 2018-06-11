
@extends('layouts.admin.dashboard')
@section('content')


<div class="col-md-10 p-4 admin container" id="2Detail">
   <strong class="message">{{ Session::get('success') }}</strong>
<div class="table-responsive">
  <table class="table table-bordered table-sm">
<thead class="text-center">
<tr class="bg-gray whiteText">
  <th scope="col">Tilte</th>
  <th scope="col">Url</th>
  <th scope="col">Event Tracking</th>
  <th scope="col">Alt Tag</th>
  <th scope="col">Logo</th>
<th>Action</th>
</tr>
</thead>


     @if($banner->count() > 0)

@foreach($banner as $dataval)
<tr>

      <td>{{ $dataval->title }}</td>
      <td>{{ $dataval->url }}</td>
      <td>{{ $dataval->event_tracking }}</td>
      <td>{{ $dataval->alt_tag }}</td>
      <td>
    <img src="{{URL::asset('public/images/banner/small/'.$dataval->banner)}}" width="90px" height="50px">
     </td>
        <td>  
          <a href="{{ route('banner.edit',$dataval->id) }}" class="btn btn-primary a-btn-slide-text">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          <span><strong>Edit</strong></span>            
          </a> 


        <form onsubmit="return confirm('Are you sure you want to delete this ?');" action="{{ route('banner.destroy', $dataval->id) }}" method="post">
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

{{ $banner->links() }}

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