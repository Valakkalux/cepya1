<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
   protected $primaryKey = 'id_a';  
   protected $fillable=['id_a','nombre'];
}
