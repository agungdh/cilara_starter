<!DOCTYPE html>
<html>
<head>
	<title>Haloo</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orang as $item)
			<tr>
				<td>{{$item->nama}}</td>
				<td>{{$item->alamat}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>