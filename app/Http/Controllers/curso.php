<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumnos;
use App\maestros;

class curso extends Controller
{
  
    public function altaalumno()
    {
	//	ORM ELOQUENT
		//select * from alumnos
		//$alumnos=alumnos::all();
		//4select * from alumnos order by nombre asc
		//$alumno=alumno::where('activo','=','Si')
		  //                  ->orderBy('nombre','Asc')
		//					->get();
		 // $clavequesigue = alumnoss::orderBy('id_a','desc')
		//						->take(1)
		//						->get();
        //   $idms = $clavequesigue[0]->id_a+1;
	 					
							
		//return $carreras;
	 //  return view ("sistema.altamaestro")
	  // ->with('alumnos',$alumnos)
	 //  ->with('idms',$idms);
	}	
	public function reportealumnos()
	{
	$alumnos = alumnos::orderBy('nombre','asc')->get();
	return view ('sistema.reportealumnos')
	->with('alumnos',$alumnos);
	
	}
	public function eliminaa($id_a)
	{
		    maestros::find($id_a)->delete();
		    $proceso = "ELIMINA ALUMNO";
			$mensaje = "El ALUMNO ha sido borrado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function modifica($idm)
	{
		$maestro = maestros::where('idm','=',$idm)->get();
		
		$idc = $maestro[0]->idc;
		
		$carrera = carreras::where('idc','=',$idc)->get();
		$demascarreras = carreras::where('idc','!=',$idc)
		                           ->get();
		
		
		return view('sistema.guardamaestro')
	                             ->with('maestro',$maestro[0])
								 ->with('idc',$idc)
								 ->with('carrera',$carrera[0]->nombre)
								 ->with('demascarreras',$demascarreras);
	}
}