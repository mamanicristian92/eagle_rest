<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function tasks()
    {
    //return $this->hasOne('App\Models\TipoMueble','tmu_id');
    }

    public function locations()
    {
    //return $this->hasOne('App\Models\TipoLinea','tli_id');
    }

    /*
    public function hospedajes()
    {
        return $this->hasOne('App\Models\Producto','pro_id','pro_id');
    }
    */
}