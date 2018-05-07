<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
class InfoController extends Controller
{
    public function changer_info(Request $req,$id){
        $info = Info::find($id);
        $info->tele = $req->tele;
        $info->mail = $req->mail;
        $info->save();
        return Redirect()->back();
    }
}
