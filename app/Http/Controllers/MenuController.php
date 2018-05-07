<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function create(){
       return view('menus.create');
     }
	 

public function store(Request $request){
       $menu = new Menu();
	   $menu->name = $request->input("name");
	   $menu->save();
	   return redirect('/menus');
     }	 
	 
public function index(){
       $listMenu = Menu::orderBy("id",'desc')->get();
       return view('menus.index',compact("listMenu"));
     }	

public function edite($id){
       $menu= Menu::find($id);
       return view('menus.edite',compact("menu"));
     }	

public function update(Request $request,$id){
       $menu= Menu::find($id);
	   $menu->name = $request->input("name");
	   $menu->save();
	   return redirect('/menus');
     }

public function destroy(Request $request,$id){
       $menu = Menu::find($id);
	   $menu->delete();
	   return redirect('/menus');
     }		 
	 	 
}
