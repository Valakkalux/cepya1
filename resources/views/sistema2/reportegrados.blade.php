

<h1>Reporte de grados</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Grado</td><td>Operaciones</td></tr>
@if(count($grado) > 0)
@foreach($grado as $gra)

<tr><td>{{$gra->id_gra}}</td>
<td>{{$gra->nombre}}</td>
<td> 
</td></tr>
@endforeach
@endif
</table>








