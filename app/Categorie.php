<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
     protected $fillable = [
         'title_categorie', 'image_categorie'];



				public function menu(){
				     return $this->belongsTo('App\Menu');
				}	

				 public function sousCategories(){
			       return $this->hasMany('App\Souscategorie');
			  }

			  public function titres(){
			  	return $this->hasMany("App\Titre");
			  }
}
