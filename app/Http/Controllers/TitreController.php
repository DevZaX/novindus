<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titre;
use App\Categorie;

class TitreController extends Controller
{
    public function index(){
    	$titres = Titre::orderBy("id","desc")->get();
    	return view("titres.index",compact("titres"));
    }

    public function create(){
    	$categories = Categorie::all();
    	return view("titres.create",compact("categories"));
    }

    public function destroy(Request $request,$id){
      $titre = Titre::find($id);
      $titre->delete();
      return redirect("/titres");
    }

    public function store(Request $request){
           $titre = new Titre();
           $titre->title = $request->title;
           $categorie = Categorie::find($request->categorie_id);
           
           $titre->categorie()->associate($categorie);
           $titre->save();
           return redirect("/titres");
    }
}
