@extends('../Layouts/layout')

@section("slider")
@endsection


@section("body-content")

<div class="container">

   @if ($errors->any())


   {{-- @php dd($errors); @endphp --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" method="POST" action="{{ url('add_shop_data') }}" role="form">
    	@csrf()
        <h2>ADD SHOP</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" placeholder="Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input name="location" type="text"  placeholder="Location" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
            <div class="col-sm-9">
                <input type="phoneNumber" name="phone_no" id="phoneNumber" placeholder="Phone number" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">ADD</button>
    </form>
</div>
<hr/>

@endsection