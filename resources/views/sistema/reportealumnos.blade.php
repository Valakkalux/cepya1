@extends('sistema.principal')

@section('contenido')
<h1>REPORTE DE ALUMNOS</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Nombre</td><td>Apellido Materno</td><td>Apellido Paterno</td>
<td>Operaciones</td></tr>
@foreach($alumnos as $ma)
<tr><td>{{$ma->id_a}}</td>
<td>{{$ma->nombre}}</td>
<td>{{$ma->ap_p}}</td>
<td>{{$ma->ap_m}}</td>
<td> 
  
Eliminar  
</a>

Modificar 
</a>
</td></tr>
@endforeach
</table>
@stop

