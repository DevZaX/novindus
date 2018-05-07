<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    public function titre(){
				     return $this->belongsTo('App\Titre');
				}	
}
