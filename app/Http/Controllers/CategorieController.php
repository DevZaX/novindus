<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Http\UploadedFile;

use DB;

use App\Categorie;
use App\Menu;
class CategorieController extends Controller
{
   
    public function store(Request $request){
       $categorie= new Categorie();
	  $categorie->title_categorie = $request->input("title_categorie");
      if($request->hasFile('image_categorie')){
           $categorie->image_categorie = $request->image_categorie->store('image');
       }
       $menu = Menu::find($request->id_menu);
       $categorie->menu()->associate($menu);
	   $categorie->save();
	   return redirect('/categories');
	}
     

     public function index(){
       $listCategorie = Categorie::orderBy("id","desc")->get();
       return view('categories.index',compact("listCategorie"));
     }

     public function destroy(Request $request,$id){
     $categorie=Categorie::find($id);
     $categorie->delete();
     return redirect('/categories');
     }    


     public function update(Request $request){

      $id = $request->input("id");
       $categorie =Categorie::find($id);
       $categorie->title_categorie = $request->input("title");
     if($request->hasFile('image1')){
      $categorie->image_categorie =  $request->file('image1')->store('image');
    }
       $categorie->save();
     return redirect('/categories');
     }


     public function edite($id){
       $categorie= Categorie::find($id);
       return view('categories.edite',compact("categorie"));
     }  


     public function create(){
       $listMenu = Menu::all();
       return view('categories.create',compact("listMenu"));
     }
}
