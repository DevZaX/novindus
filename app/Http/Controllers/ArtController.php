<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;
use App\Titre;

class ArtController extends Controller
{
    public function index(){
    	$articles = Art::all();
    	return view("arts.index",compact("articles"));
    }

    public function create(){
    	$titres = Titre::all();
    	return view("arts.create",compact("titres"));
    }

    public function store(Request $request){
            $article= new Art();
	   $article->title = $request->input("title");
	   $article->description = $request->input("description");
	   $article->new_price= $request->input("new_price");
	   $article->old_price= $request->input("old_price");
	     if($request->hasFile('picture')){
	           $article->picture = $request->picture->store('image');
	     }
      $titre = Titre::find($request->titre_id);
      $article->titre()->associate($titre);
      if($request->disponibilitie == "yes") $article->disponibilitie = 1;
      else $article->disponibilitie = 0;
	   $article->save();
	   return redirect('/arts');
    }

    public function edite($id){
         $article = Art::find($id);
         return view("arts.edite",compact("article"));
    }

    public function update(Request $request,$id){
          $article = Art::find($id);
          $article->title = $request->title;
          $article->new_price = $request->new_price;
          $article->old_price = $request->old_price;
          $article->description = $request->description;
          if($request->disponibilitie == "yes") $article->disponibilitie = 1;
          else $article->disponibilitie = 0;
          $article->save();
           return redirect('/arts');
    }
}
