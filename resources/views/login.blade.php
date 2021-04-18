@extends('master')
@section('content')
<div class="container" >
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" id="coustm-login">
			
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Click Me</button>
</form>
			
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
@endsection