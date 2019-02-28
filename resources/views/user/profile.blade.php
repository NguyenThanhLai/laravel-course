<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
	<table>
		<<thead>
			<tr>
				<th>STT</th>
				<th>name</th>
				<th>email</th>
			</tr>
		</thead>
		<?php $i = 0;  ?>
		@foreach($user as $user)
		<<tbody>
			<tr>
				<td><?php echo ++$i; ?></td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email}}</td>

			</tr>
		</tbody>
		@endforeach
	</table>
</body>
</html>