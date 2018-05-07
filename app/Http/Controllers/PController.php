<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\P;

class PController extends Controller
{
     public function index(){
    	$ps = P::all();
    	return view("ps.index",compact("ps"));
    }

    public function create(){
    	return view("ps.create");
    }

    public function store(Request $request){
            $p= new P();
	   $p->title = $request->input("title");
	   $p->emplacement = $request->input("emplacement");
	   $p->content= $request->input("content");
	  
     
	   $p->save();
	   return redirect('/ps');
    }

    public function edite($id){
         $p = P::find($id);
         return view("ps.edite",compact("p"));
    }

    public function update(Request $request,$id){
          $p = P::find($id);
          $p->title = $request->title;
          $p->emplacement = $request->emplacement;
          $p->content = $request->content;
        
      
          $p->save();
           return redirect('/ps');
    }
}
