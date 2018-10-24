
@extends('sistema.principal')


@section('contenido')
<h1> Alta de grupos </h1>
<br>
<form action = '{{route('guardagrupos')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_gru')) 
<i> {{ $errors->first('id_gru') }} </i> 
@endif	<br>
        

Clave grupo <input type = 'hidden' name = 'id_gru' value="" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	
<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
Seleccione grado<select name = 'id_gra'>
            @foreach($grado as $gra)
			<option value = '{{$gra->id_gra}}'>{{$gra->nombre}}</option>
			@endforeach
                  </select>
<br>
<br>


<input type = 'submit' value = 'Guardar'>
<br>
</form>



@stop


@section('bienvenida')
Bienvenido panchito;
@stop





