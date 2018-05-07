<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
              public function categories(){
			       return $this->hasMany('App\Categorie');
			  }
}
