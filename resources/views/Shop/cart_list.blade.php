@extends('../Layouts/layout')

@section("slider")
@endsection

@section("body-content")
		
	<div class="container">
		<div class="row">
			<table class="table table-hover">
			    <thead>
			        <tr>
			            <th>Customer name</th>
			            <th>Product Name</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($data as $row)
			    		<tr >
				            <td>{{ $row->username }}</td>
				            <td>{{ $row->name }}</td>
				            <td><button type="button"> Edit</button></td>
				            <td><button type="button">Delete</button></td>
			        </tr>

			    	@endforeach
			        
			    </tbody>
			</table>
		</div>
	</div>	


@endsection