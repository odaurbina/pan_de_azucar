<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera1';

    public function getCarreras($id)
    {
    	
    	$carreras =\DB::select('select * from carrera1 where id = ' . $id);
    
        return $carreras; 

    }
    public function getCarreras()
    {
    	  
    	$carreras =\DB::select('select * from carrera1');
        return $carreras; 

    }

}