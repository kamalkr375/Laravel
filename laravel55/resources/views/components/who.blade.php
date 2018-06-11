@if(Auth::guard('web')->check())
<p> You are login <strong>User</strong></p>
@else
<p> You are not login <strong>User</strong></p>
@endif

<P>============================================== </P>

@if(Auth::guard('admin')->check())

 <p> Your are login <strong>Admin</strong></p>

@else

<p>You are not login <strong>Admin</strong></p>

@endif