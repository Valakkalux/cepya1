<html>
<body>
<h1> Modifica Alumno </h1>
<br>
<form action = "{{route('editamaestro')}}" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('idm')) 
<i> {{ $errors->first('idm') }} </i> 
@endif	<br>
        

Clave profesor <input type = 'text' name = 'idm' value="{{$maestro->idm}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{$maestro->nombre}}">
<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad<input type = 'text' name = 'edad' value="{{$maestro->edad}}" >
<br>
@if($maestro->sexo=="F")
	Sexo <input type = 'radio' name = 'sexo' value = 'M' >M
	<input type = 'radio' name = 'sexo' value = 'F' checked>F
@else
	Sexo <input type = 'radio' name = 'sexo' value = 'M' checked >M
	<input type = 'radio' name = 'sexo' value = 'F'>F	
@endif
<br>
@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>
Codigo postal<input type  ='text' name = 'cp' value="{{$maestro->cp}}">
<br>
@if($errors->first('beca')) 
<i> {{ $errors->first('beca') }} </i> 
@endif	<br>
Beca<input type  ='text' name = 'beca' value="{{$maestro->beca}}">
<br>
Seleccione Carrera<select name = 'idc'>
         <option value = '{{$idc}}'>{{$carrera}}</option>
		 @foreach($demascarreras as $dc)
		 <option value = '{{$dc->idc}}'>{{$dc->nombre}}</option>
		 @endforeach
                  </select>
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>
<img src = "{{asset('archivos/'.$maestro->archivo)}}"
        height =150 width=150></td>
		<br>
Seleccione foto<input type= 'file' name = 'archivo'>
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>
</body>
</html> 