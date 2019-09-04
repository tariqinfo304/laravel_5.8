@extends('../Layouts/layout')

@section("slider")
@endsection


@section("body-content")

<div class="container">

    <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ url('user_add') }}" role="form">
    	@csrf()
        <h2>Registration of User With Middleware Validation</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input name="name" value="{{ old('name') }}" type="text" id="Name" placeholder="Name" class="form-control" autofocus>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="text" name="email"  id="email" placeholder="Email" class="form-control" name= "email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" name="con_password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
            <div class="col-sm-9">
                <input type="date" name="date" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
            <div class="col-sm-9">
                <input type="phoneNumber" name="phone_no" id="phoneNumber" placeholder="Phone number" class="form-control">
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>
        <div class="form-group">
                <label for="Height" class="col-sm-3 control-label">Height* </label>
            <div class="col-sm-9">
                <input type="number" name="height" id="height" placeholder="Please write your height in centimetres" class="form-control">
            </div>
        </div>
         <div class="form-group">
                <label for="weight" class="col-sm-3 control-label">Weight* </label>
            <div class="col-sm-9">
                <input type="number" name="weight" id="weight" placeholder="Please write your weight in kilograms" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input name="gender" type="radio" id="femaleRadio" value="Female">Female
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input name="gender" type="radio" id="maleRadio" value="Male">Male
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Required fields</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register User</button>
    </form>
</div>
<hr/>

@endsection