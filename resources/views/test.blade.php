<html>
<head></head>
<body>
	<h2>Value show in Blade Template</h2>
	<h3> Name : {{ $name }} </h3>
	<form action="method" method="POST">
		@csrf()
		<label>POST</label>
		<input type="submit" value="POST"/>
	</form>
	<hr/>
	<form action="method" method="POST">
		@method('PUT')
		@csrf()
		<label>PUT</label>
		<input type="submit" value="PUT"/>
	</form>
	<hr/>
	<form action="method" method="POST">
		@method('Delete')
		@csrf()
		<label>DELETE</label>
		<input type="submit" value="DELETE"/>
	</form>
	<hr/>
</body>
</html>