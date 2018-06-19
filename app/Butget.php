<?php

namespace dimor;

use Illuminate\Database\Eloquent\Model;

class Butget extends Model
{
    protected $table = "butgets";
    protected $fillable = ['costoDirecto','exterioresUrbanismo','costoIndirecto','lote','utilidad','otros','totalProyecto'];

    public function bulding(){
    	return $this ->hasOne('dimor\Bulding');
    }
}
