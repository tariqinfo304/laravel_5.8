<html>
<head></head>
<body>

	<form action="crud" method="get">
		@csrf()
		<label>index method</label>
		<input type="submit" value="Index"/>
	</form>
	<hr/>

	<form action="crud/create" method="GET">
		@csrf()
		<label>create</label>
		<input type="submit" value="Create"/>
	</form>
	<hr/>
	<form action="crud" method="POST">
		@csrf()
		<label>store</label>
		<input type="submit" value="Store"/>
	</form>
	<form action="crud/23" method="GET">
		@csrf()
		<label>show</label>
		<input type="submit" value="Show"/>
	</form>
	<hr/>
	<form action="crud/23/edit" method="GET">
		<label>Edit</label>
		<input type="submit" value="Edit"/>
	</form>
	<hr/>
	<form action="crud/23" method="POST">
		@method('PUT')
		@csrf()
		<label>update</label>
		<input type="submit" value="update"/>
	</form>
	<hr/>

	<form action="crud/23" method="POST">
		@method('DELETE')
		@csrf()
		<label>Delete</label>
		<input type="submit" value="Delete"/>
	</form>
	<hr/>
</body>
</html>