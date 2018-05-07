<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    public function categorie(){
    	return $this->belongsTo("App\Categorie");
    }


     public function arts(){
			       return $this->hasMany('App\Art');
			  }
}
