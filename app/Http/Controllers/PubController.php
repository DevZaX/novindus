<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pub;

class PubController extends Controller
{
     public function index(){
    	$articles = Pub::all();
    	return view("pubs.index",compact("articles"));
    }

    public function create(){
    	return view("pubs.create");
    }

    public function store(Request $request){
            $article= new Pub();
	   $article->title = $request->input("title");
	   $article->description = $request->input("description");
	   $article->new_price= $request->input("new_price");
	   $article->old_price= $request->input("old_price");
	     if($request->hasFile('picture')){
	           $article->picture = $request->picture->store('image');
	     }
      if($request->disponibilitie == "yes") $article->disponibilitie = 1;
      else $article->disponibilitie = 0;
	   $article->save();
	   return redirect('/pubs');
    }

    public function edite($id){
         $article = Pub::find($id);
         return view("pubs.edite",compact("article"));
    }

    public function update(Request $request,$id){
          $article = Pub::find($id);
          $article->title = $request->title;
          $article->new_price = $request->new_price;
          $article->old_price = $request->old_price;
          $article->description = $request->description;
          if($request->disponibilitie == "yes") $article->disponibilitie = 1;
          else $article->disponibilitie = 0;
          $article->save();
           return redirect('/pubs');
    }
}
