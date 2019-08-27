@extends('../Layouts/layout')

@section("slider")
@endsection

@section("body-content")
		
	<div class="container">
		<div class="row">
			<table class="table table-hover">
			    <thead>
			        <tr>
			            <th>Name</th>
			            <th>Location</th>
			            <th>Phone No.</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($data as $row)
			    		<tr >
				            <td>{{ $row->name }}</td>
				            <td>{{ $row->location }}</td>
				            <td>{{ $row->phone_no }}</td>
				            <td><button type="button"> Edit</button></td>
				            <td><button type="button">Delete</button></td>
			        </tr>

			    	@endforeach
			        
			    </tbody>
			</table>
		</div>
	</div>	


@endsection