<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\Info;
use Redirect;

class PictureController extends Controller
{

    public function options(){
        $listPicture = Picture::all();

        $info = Info::find(1);

        return view('dashboard.options',["listPicture"=>$listPicture,"info"=>$info]);
    }


    public function picture(Request $request){
        if($request->hasFile('picture')){
            $picture = Picture::where("index",$request->input('index'))->first();

            $picture->picture = $request->file('picture')->store('image');
            $picture->save();
        }

        return Redirect()->back();


    }
}
