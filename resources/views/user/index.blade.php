<!DOCTYPE html>
<html>
<head>
	<title>List User</title>
</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	<div>
		<a href="{{url('users/create')}}">Add new</a>
	</div>
<table>
	<caption>List User</caption>
	<thead>
		<tr>
			<th>STT</th>
			<th>Name</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 0; ?>
		@foreach($userList as $user)
		<?php $i = $i + 1; ?>
		<tr>
			<td>{{$i}}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td><a href="{{ url("users/$user->id/edit") }}">Edit</a></td>
			<td>
				<form action="{{ url('users/'.$user->id) }}" method="POST"> 
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
				
				    <button type="sumbit" class="btn btn danger">
						<i class="fa fa-trash"></i> Delete
				    </button>
				</form>
		</tr>
	</td>
		@endforeach
	</tbody>
</table>
</body>
</html>