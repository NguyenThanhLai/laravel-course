<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
	<form action="{{url('users')}}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Name"><br>
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button type="sumbit">Sumbit</button>

	</form>

</body>
</html>