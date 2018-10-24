
@extends('sistema.principal')


@section('contenido')
<h1>Reporte de alumnos</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Foto</td><td>Nombre</td>
<td>Edad</td><td>Operaciones</td></tr>
@if(count($alumno) > 0)
@foreach($alumno as $alumn)
<tr><td>{{$alumn->id_a}}</td>

<td>{{$alumn->nombre}}</td>
<td> 
</td></tr>
@endforeach
@endif
</table>
@stop







