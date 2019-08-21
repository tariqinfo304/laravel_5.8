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
			            <th>Email</th>
			            <th>Date Of Birth</th>
			            <th>Height</th>
			            <th>Weight</th>
			            <th>Edit</th>
			            <th>Delete</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($data as $row)
			    		<tr >
				            <td>{{ $row->name }}</td>
				            <td>{{ $row->email }}</td>
				            <td>{{ $row->dob }}</td>
				            <td>{{ $row->height }} </td>
				            <td>{{ $row->weight }}</td>
				            <td><button type="button"> Edit</button></td>
				            <td><button type="button">Delete</button></td>
			        </tr>

			    	@endforeach
			        
			    </tbody>
			</table>
		</div>
	</div>	


@endsection