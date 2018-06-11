
@extends('layouts.admin.dashboard')
@section('content')


<div class="col-md-10 p-4 admin container" id="2Detail">
   <strong class="message">{{ Session::get('success') }}</strong>
<div class="table-responsive">
  <table class="table table-bordered table-sm">
<thead class="text-center">
<tr class="bg-gray whiteText">
   <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Role</th>
<th>Action</th>
</tr>
</thead>


     @if($data->count() > 0)

@foreach($data as $dataval)
<tr>

		<td>{{ $dataval->name }}</td>
		<td>{{ $dataval->email }}</td>
		<td>@if($dataval->status==0)
                 {{ 'Deactive' }}
            @else

                {{ 'Active' }}
            @endif
		</td>
		<td>
		    {{ $dataval->rolebelongsto->name }}
		</td>
        <td>  
         <!-- <a href="{{ route('admin.brand.edit',$dataval->id) }}" class="btn btn-primary a-btn-slide-text">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          <span><strong>Edit</strong></span>            
          </a> -->


   <!--     <form onsubmit="return confirm('Are you sure you want to delete this ?');" action="{{ route('admin.brand.destroy', $dataval->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit">Delete</button>
        </form>-->
          
        </td>
</tr>

@endforeach

@endif
</table>


</div>
<div class="admin-pagination">
<div class="row">

<nav class="col-md-6">

{{ $data->links() }}

</nav>
</div>
</div>
 </div>


 

@endsection