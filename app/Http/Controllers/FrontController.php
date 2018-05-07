<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Menu;
use App\Picture;
use App\Titre;
use App\Categorie;
use App\Art;
use App\Pub;
use Mail;
use App\P;
use App\Info;

class FrontController extends Controller
{


    	public function index(){
             $listMenu = Menu::all();
             $pictures =  Picture::all();
             $pubs = Pub::all();
             $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
             $info = Info::find(1);
             return view('index',compact("listMenu","pictures","pubs","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));	
     }

     public function articles($id){
     	$listMenu = Menu::all();
     	$titreItem = Titre::find($id);
      $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
    
     	return view("b",compact("listMenu","titreItem","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));
     }

     
      public function Allarticles($id){
        $listMenu = Menu::all();
        $categorieItem = Categorie::find($id);
        $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
    
        return view("c",compact("listMenu","categorieItem","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));
     }


     public function show_article($id){
               $article = Art::find($id);
               $listMenu = Menu::all();
               $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
               $a = 1;
               return view("d",compact("article","listMenu","a","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));
     }

         public function show_pub($id){
               $article = Pub::find($id);
               $listMenu = Menu::all();
               $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
               $a = 0;
               return view("dd",compact("article","listMenu","a","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));
     }

     public function show_formulaire_commande($id){
          $article = Art::find($id);
               $listMenu = Menu::all();
               $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
               return view("f",compact("article","listMenu","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));
     }

      public function show_formulaire_commande_pub($id){
          $article = Pub::find($id);

               $listMenu = Menu::all();
               $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
               return view("ff",compact("article","listMenu","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","info"));
     }


public function valider(Request $request){
    $title = $request->input('title');
  $qte = $request->input('qte');
  $coord = $request->input('coord');
  

    $data=array('title'=>$title,'qte'=>$qte,'coord'=>$coord);

 /* 
 Mail::send('command',$data,function($msg){
   $msg->from('groupeG1LSI@gmail.com','G1');
    $msg->to('zakaria_aboud@hotmail.com')->subject('Nouveau Mail');
  });
*/
 $txt ='
Bonjour
vous avez une nouvelle command: voir les detailles:

article:

'.$title.'

qte: 

'.$qte.'

societe:

'.$coord.'

Cordialement.';
$to = Info::find(1)->mail;
$subject = "Novindus Nouvelle command";
mail($to,$subject,$txt);
  session()->flash('msg', 'Task was successful!');

 return redirect("commander/".$request->id);
}


public function valider_pub(Request $request){
    $title = $request->input('title');
  $qte = $request->input('qte');
  $coord = $request->input('coord');
  

    $data=array('title'=>$title,'qte'=>$qte,'coord'=>$coord);

  /*
  Mail::send('command',$data,function($msg){
   $msg->from('groupeG1LSI@gmail.com','G1');
    $msg->to('zakaria_aboud@hotmail.com')->subject('Nouveau Mail');
  });*/
  $txt ='
Bonjour
vous avez une nouvelle command: voir les detailles:

article:

'.$title.'

qte: 

'.$qte.'

societe:

'.$coord.'

Cordialement.';
$to =Info::find(1)->mail;
$subject = "Novindus Nouvelle command";
mail($to,$subject,$txt);
  


  session()->flash('msg', 'Task was successful!');

 return redirect("commander/pub/".$request->id);
}


public function show_page($id){
    $page = P::find($id);
    $listMenu = Menu::all();
    $page_contact = P::where("emplacement","contact")->first();
             $page_liv = P::where("emplacement","livraison")->first();
             $page_propos = P::where("emplacement","propos")->get();
             $page_client = P::where("emplacement","clients")->get();
             $page_pratique = P::where("emplacement","pratique")->get();
             $page_offre = P::where("emplacement","offres")->get();
               $info = Info::find(1);
    return view("p",compact("page","page_offre","page_pratique","page_client","page_liv","page_contact","page_propos","listMenu","info"));
}
 
}
