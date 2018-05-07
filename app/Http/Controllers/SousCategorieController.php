<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Souscategorie;

class SousCategorieController extends Controller
{
    
    public function store(Request $request){
       $sousCategorie= new Souscategorie();
	  $sousCategorie->name = $request->input("name");
     
       $categorie = Categorie::find($request->id_categorie);
       $sousCategorie->categorie()->associate($categorie);
	   $sousCategorie->save();
	   return redirect('/sousCategories');
	}
     

     public function index(){
       $listSouscategorie = Souscategorie::orderBy("id","desc")->get();
       return view('sousCategories.index',compact("listSouscategorie"));
     }

     public function destroy(Request $request,$id){
     $sousCategorie=Souscategorie::find($id);
     $sousCategorie->delete();
     return redirect('/sousCategories');
     }   


     public function create(){
       $listSouscategorie = Categorie::all();
       return view('sousCategories.create',compact("listSouscategorie"));
     }
}
