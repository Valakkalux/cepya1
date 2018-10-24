<!DOCTYPE html>
<html>
<head>
	<title>Calificaciones</title>
</head>
<body>
	<form action = '{{route('guardagrados')}}' method = 'POST' enctype='multipart/form-data'>
	{{csrf_field()}}

		<br><br><br><br><br>
		<table border="1" align="center">
			<tr>
				<td>N.L</td><td>Nombre</td><td>Ciencias</td><td>Espanol</td><td>Mate</td>
			</tr>
			<tr>
				<td>1</td><td>David</td><td>8</td><td>8</td><td>8</td>
			</tr>
			<tr>
				<td>2</td><td></td><td></td><td></td><td></td>
			</tr>
			<tr>
				<td>3</td><td></td><td></td><td></td><td></td>
			</tr>
			<tr>
				<td>4</td><td></td><td></td><td></td><td></td>
			</tr>
			
		</table>
	</form>

</body>
</html>