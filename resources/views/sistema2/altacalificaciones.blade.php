
@extends('sistema.principal')


@section('contenido')
<h1> Alta de Alumnos </h1>
<br>
<form action = '{{route('guardaalumno')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_a')) 
<i> {{ $errors->first('id_a') }} </i> 
@endif	<br>
        

Clave profesor <input type = 'hidden' name = 'id_a' value="" readonly ='readonly'>
<br-->
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
Apellido Paterno <input type  ='text' name = 'ap_p' value="{{old('ap_p')}}">
<br>
Apellido Materno <input type  ='text' name = 'ap_m' value="{{old('ap_m')}}">
<br>

Seleccione usuario<select name = 'id_usu'>
            @foreach($usuarios as $usu)
			<option value = '{{$usu->id_usu}}'>{{$usu->nombre}}</option>
			@endforeach
                  </select>
<br>
Seleccione nivel<select name = 'id_n'>
            @foreach($niveles as $ni)
			<option value = '{{$ni->id_n}}'>{{$ni->nivel}}</option>
			@endforeach
                  </select>
<br>
Seleccione grupo<select name = 'id_gru'>
            @foreach($grupo as $gru)
			<option value = '{{$gru->id_gru}}'>{{$gru->nombre}}</option>
			@endforeach
                  </select>
<br>
Seleccione grado<select name = 'id_gra'>
            @foreach($grado as $gra)
			<option value = '{{$gra->id_gra}}'>{{$gra->nombre}}</option>
			@endforeach
                  </select>
<br>
Seleccione materia<select name = 'id_ma'>
            @foreach($materias as $ma)
			<option value = '{{$ma->id_ma}}'>{{$ma->nombre}}</option>
			@endforeach
                  </select>
<br>
Seleccione ciclo<select name = 'id_ciclo'>
            @foreach($ciclo as $ciclo)
			<option value = '{{$ciclo->id_ciclo}}'>{{$ciclo->ciclo}}</option>
			@endforeach
                  </select>
<br>


<input type = 'submit' value = 'Guardar'>
<br>
</form>



@stop


@section('bienvenida')
Bienvenido panchito;
@stop
