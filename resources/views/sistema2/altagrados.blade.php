
@extends('sistema.principal')


@section('contenido')
<h1> Alta de grados </h1>
<br>
<form action = '{{route('guardagrados')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_gra')) 
<i> {{ $errors->first('id_gra') }} </i> 
@endif	<br>
        

Clave grado <input type = 'hidden' name = 'id_gra' value="" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
<br>


<input type = 'submit' value = 'Guardar'>
<br>
</form>



@stop


@section('bienvenida')
Bienvenido panchito;
@stop





