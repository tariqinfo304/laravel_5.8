@extends('../Layouts/layout')

@section("slider")
@endsection


@section("body-content")

<div class="container">

 	<form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ url('do_login') }}" role="form">
    	@csrf()
        <h2>Registration of User With Middleware Validation</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input name="username" value="{{ old('username') }}" type="text" id="Name" placeholder="Username" class="form-control" autofocus>
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Password </label>
            <div class="col-sm-9">
                <input type="password" name="password"  id="password" class="form-control"/>
            </div>
             @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register User</button>
    </form>
</div>

<hr/>

@endsection