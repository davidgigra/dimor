<?php

namespace dimor;

use Illuminate\Database\Eloquent\Model;

class Bulding extends Model
{
    //
    protected $table = "buldings";

    protected $fillable = ['name','butget_id','city','client'];

    public function butget(){
    	return $this->belongsTo('dimor\Butget');
    }
    public function users()
    {
        return $this->belongsToMany('dimor\User');
    }
    
}
