
@extends('sistema.principal')


@section('contenido')
<h1>Reporte de Grupos</h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Foto</td><td>Nombre</td>
<td>Edad</td><td>Operaciones</td></tr>
@if(count($grupo) > 0)
@foreach($grupo as $grup)
<tr><td>{{$grup->id_gru}}</td>

<td>{{$grup->nombre}}</td>
<td> 
</td></tr>
@endforeach
@endif
</table>
@stop







