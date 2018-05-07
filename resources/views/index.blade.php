
<!DOCTYPE html>

<html lang="fr" class="no-js">

  <head>
    <title>Novindus - MAROC</title><meta http-equiv="X-UA-Compatible" content="IE=edge" />

    



<link rel='stylesheet' type='text/css'
      href='https://fonts.googleapis.com/css?family=Oswald:400,700,300'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Fournitures industrielles pour les professionnels-Orexad:Plus de 130 000 références à commander en ligne ! Livraison en 24h !" />
        <meta name="robots" content="index,follow" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        <!--<meta name="google-site-verification" content="YHtgNLvlb8TyxNvV_vWH_eLOL4UPJEr7Lq6DxTZvA5E" />-->
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('images/favicon.jpg')}}"
      media='all'>
    
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/combined_common.css?id=1523874196307')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('combined_homepage.css?id=1523874196307')}}"/>
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/combined_theme_common.css?id=1523874196307')}}"/>
    <style type="text/css" media="print">
  @IMPORT url("print.css");
</style>



<!--[if IE 8]> <link type="text/css" rel="stylesheet" href="/combined.css?id=f67b1dd3162cdfb"  media="screen, projection" /> <![endif]-->
<!--[if IE 7]> <link type="text/css" rel="stylesheet" href="/combined.css?id=14e93ff4162cdfb"  media="screen, projection" /> <![endif]-->
<!--[if IE 8]> <link type="text/css" rel="stylesheet" href="/combined.css?id=5cc547c7162cdfb"  media="screen, projection" /> <![endif]-->
<!--[if IE 7]> <link type="text/css" rel="stylesheet" href="/combined.css?id=7b3369e8162cdfb"  media="screen, projection" /> <![endif]-->
<!-- sInfoPostFix doesn't have a message in base properties -->


</head>
  
  <body
  class="notification-bar-active page-homepage pageType-ContentPage template-pages-layout-landingLayout1Page pageLabel-homepage language-fr" style="background-color:#f2f2f2;"
>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBL3TP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="main-wrapper">
      <div id="nav_main" class="mobile-nav hidden-md hidden-lg">
    <ul class="yCmsContentSlot mobile-nav-list">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<li class="home">
          <a href="{{url('/')}}" title="Accueil">Accueil</a>
        </li>
    
	@foreach($listMenu as $menu)
<li>
    <div class="yCmsComponent submenu-trigger">
	@foreach($menu->categories as $categorie)
	@if(count($categorie->titres) > 0)
<a href="{{url($categorie->titres[0]->title.'/categorie')}}" title="Entretien et réparation">{{$categorie->titres[0]->title}}</a></div><ul class="mobile-subnav-list">
@endif
          @endforeach
          </ul>
    </li>

@endforeach


</ul></div>
















<div class="main-scroller">
      <div class="main-content">    
        <div id="page" data-currency-iso-code="EUR" data-language-iso-code="fr">
          <input type="hidden" id="isPortal" value="false" />
<div id="header" class="main-content" data-currentuser-name="Anonymous">

  <!--[if lt IE 8]>
            <div id="header-ie7-warning" class="container" >
                  Vous utilisez un navigateur obsolète, veuillez le mettre à jour pour profiter d'une meilleure expérience de navigation.</div>
    <![endif]-->
    
    <div class="yCmsComponent" style="background-color:#DA0000;bordr-bottom:3px solid #080808">
<div class="topbar" style="background-color:#DA0000;bordr-bottom:3px solid #080808">
    <div class="container" >
       <ul class="pull-left"> 
	   
	   
	   <li class="home home-client hidden-xs hidden-sm"><img src="{{asset('images/p.png')}}"> <a href="{{url('/page/'.$page_contact->id)}}"><strong>{{$page_contact->title}}</strong></a></li>
	   
	   <li class="home home-client hidden-xs hidden-sm"><img src="{{asset('images/l.png')}}"> <a href="{{url('page/'.$page_liv->id)}}"><strong>{{$page_liv->title}}</strong></a></li> 




	   </ul><div class="pull-right">      
              <a href="{{url('page/3')}}" class="groupiph-link hidden-xs hidden-sm" target="_blank">Qui sommes nous ?</a> 
                <ul class="pull-right">
                  <li class="phone phone-client">                 
                   {{$info->tele}} </li>
                </ul>
              </div>
    </div>
</div>
</div>





<div class="header" role="banner">
    <div class="container">
       <a href="#" class="mobile-nav-btn hidden-md hidden-lg"><span>Menu</span></a>
             <a href="#" class="tablet-nav-btn hidden-sm hidden-xs"><span>Menu</span></a>
             
            <div class="main-logo-ctn"> 
               <a href="/" title=""class="main-logo">
          <img title="Orexad, toutes vos fournitures industrielles" alt="Orexad, toutes vos fournitures industrielles" src="{{asset('images/orexad-logo.png?v=160702123607+0200')}}" class="hidden-md hidden-lg promo">
          <img title="Orexad, toutes vos fournitures industrielles" alt="Orexad, toutes vos fournitures industrielles" src="{{asset('images/orexad-logo.png?v=160702123607+0200')}} class="hidden-xs hidden-sm promo">
        </a>  
<a><img src="{{asset('images/3m-logo-png-transparent.png')}}" width="100" height="100"></a>	
<a><img src="{{asset('images/2000px-Loctite-Logo.svg.png')}}" width="100" height="100"></a>	
<a><img src="{{asset('images/Ansell_logo.svg.png')}}" width="100" height="100"></a>	
<a><img src="{{asset('images/Schmalz.svg.png')}}" width="100" height="100"></a>		
      </div>
      
      
      
      <div class="nav pull-right">

          <div class="user-ctn">
  
    
<!-- </div><div class="contact-ctn  hidden-xs hidden-sm"> -->
              <!-- <a class="contact" href="/fr/contactRequest">Nous contacter</a> -->
            <!-- </div> -->
          
  </div>
    </div>
  </div>
    
    
</div>

<div id="nav_main" class="megamenu hidden-xs hidden-sm">
  <div class="container">
    <ul class="yCmsContentSlot megamenu-list">
    
    
    
    
    
<li class="home">
                     <style>
           .megamenu .megamenu-list>li.home>a{
           background-color:#DA0000;
           background-image:url("{{asset('images/home-icon-silhouette.png')}}");
            background-repeat: no-repeat;
             background-position: center;}
    </style>
           </style>
          <a href="{{url('/')}}" title="Accueil"><span>Accueil</span></a>
        </li>
        
        

  
  
  
  
  
  
  
  
  
@foreach($listMenu as $menu)
  
<li class="megamenu-trigger tab-nav-red ">
  <a href="#" title="{{$menu->name}}">{{$menu->name}}</a><div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    
    <ul class="range-list">
      @foreach($menu->categories as $categorie)
        <li class="range">
            <div class="range-visual">
              <img alt="" src="{{asset('storage/'.$categorie->image_categorie)}}">
              </div>
            <div class="range-categories">
              <a class="range-name" href="{{url('all/'.$categorie->id)}}">{{$categorie->title_categorie}}</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
				  @foreach($categorie->titres as $titre)
<a href="{{url('categorie/'.$titre->id)}}" title="Protection de la tête">{{$titre->title}}</a></li>
@endforeach
</ul>
              </div>
            </li>
         @endforeach
        
          </ul>
    </div>
    </div>
  </li>

  @endforeach
  
  
  
  
  
  
  
  
  
  
  
  


  
  
  <li class="megamenu-trigger  ">
  </li>
<li class="megamenu-trigger  ">
  <div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-10">TEST NAVIGATION NODE NILS LEVEL 2</a>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>
</ul></div>
</div>






<div id="nav_main" class="megamenu-touch hidden-xs hidden-sm">
  <div class="megamenu-list-ctn">
  
    <ul class="yCmsContentSlot megamenu-list">
    
    
    
    
    
    
    


<li class="megamenu-trigger tab-nav-greenarmy ">
  <a href="/fr/c-45" title="Equipement">Equipement</a><div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              <img alt="" src="45-10-Werkplaatsmachines.jpg?v=170211224643+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-10">Machines outils</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-10-10" title="Usinage par enlèvement de copeaux">Usinage par enlèvement de copeaux</a></li><li class="yCmsComponent">
<a href="/fr/c-45-10-15" title="Usinage de pièces métalliques sans production de copeaux">Usinage de pièces métalliques sans production de copeaux</a></li><li class="yCmsComponent">
<a href="/fr/c-45-10-20" title="Autres machines d'ateliers">Autres machines d'ateliers</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-30-hijshefmateriaal.png?v=170211224643+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-30">Matériaux de hissage, de levage et de traction</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-30-10" title="Palans à chaîne et chariots roulants">Palans à chaîne et chariots roulants</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-15" title="Équilibreurs et dynamomètres">Équilibreurs et dynamomètres</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-20" title="Sangles de levage et élingues rondes">Sangles de levage et élingues rondes</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-25" title="Chaînes de levage, mailles d'accouplement et crochets porte-charge">Chaînes de levage, mailles d'accouplement et crochets porte-charge</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-30" title="Pinces de levage, accessoires de levage, structures de levage et grues">Pinces de levage, accessoires de levage, structures de levage et grues</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-35" title="Câbles de levage, palans à câble, treuils, tendeurs et cordes">Câbles de levage, palans à câble, treuils, tendeurs et cordes</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-40" title="Équipement de levage">Équipement de levage</a></li><li class="yCmsComponent">
<a href="/fr/c-45-30-45" title="Systèmes d'arrimage">Systèmes d'arrimage</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-35-Intern-transport.png?v=170211224643+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-35">Transport interne</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-35-10" title="Moyens de transport">Moyens de transport</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-45-stroomaggregaten.png?v=170211224643+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-45">Groupes électrogène</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-45-15" title="Générateur">Générateur</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-50-reinigingmateriaal.png?v=170211224643+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-50">Matériel/équipement de nettoyage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-50-10" title="Nettoyeurs haute pression">Nettoyeurs haute pression</a></li><li class="yCmsComponent">
<a href="/fr/c-45-50-15" title="Aspirateurs professionnels pour poussière et eau">Aspirateurs professionnels pour poussière et eau</a></li><li class="yCmsComponent">
<a href="/fr/c-45-50-20" title="Nettoyeurs de sol">Nettoyeurs de sol</a></li><li class="yCmsComponent">
<a href="/fr/c-45-50-30" title="Fontaines de dégraissage et accessoires">Fontaines de dégraissage et accessoires</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-60-klimmateriaal.png?v=170211224643+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-60">Matériaux pour travail en hauteur</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-60-10" title="Échafaudages, échelles et escabeaux">Échafaudages, échelles et escabeaux</a></li><li class="yCmsComponent">
<a href="/fr/c-45-60-15" title="Plateformes">Plateformes</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-65-verwarmen.png?v=170211224644+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-65">Chauffage, ventilation et refroidissement</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-65-10" title="Équipement pour chauffage ou refroidissement">Équipement pour chauffage ou refroidissement</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="45-70-magazijninrichting.png?v=170211224644+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-45-70">Aménagement de magasin</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-45-70-10" title="Rayonnages profilés pour bacs et palettes">Rayonnages profilés pour bacs et palettes</a></li><li class="yCmsComponent">
<a href="/fr/c-45-70-15" title="Mobilier industriel">Mobilier industriel</a></li></ul>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>
<li class="megamenu-trigger tab-nav-purple ">
  <a href="/fr/c-10" title="Usinage">Usinage</a><div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              <img alt="" src="10-10-Boren.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-10">Perçage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-10-10" title="Forets HSS">Forets HSS</a></li><li class="yCmsComponent">
<a href="/fr/c-10-10-20" title="Forets carbure monobloc">Forets carbure monobloc</a></li><li class="yCmsComponent">
<a href="/fr/c-10-10-60" title="Fraises à trépaner">Fraises à trépaner</a></li><li class="yCmsComponent">
<a href="/fr/c-10-10-70" title="Fraises à carotter">Fraises à carotter</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-15-Frezen.jpg?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-15">Fraisage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-15-10" title="Fraises HSS monobloc">Fraises HSS monobloc</a></li><li class="yCmsComponent">
<a href="/fr/c-10-15-20" title="Fraises carbure monobloc">Fraises carbure monobloc</a></li><li class="yCmsComponent">
<a href="/fr/c-10-15-40" title="Fraises à plaquettes">Fraises à plaquettes</a></li><li class="yCmsComponent">
<a href="/fr/c-10-15-50" title="Fraises à trou lisse">Fraises à trou lisse</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-20-Draadsnijden.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-20">Filetage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-20-10" title="Tarauds et accessoires">Tarauds et accessoires</a></li><li class="yCmsComponent">
<a href="/fr/c-10-20-20" title="Filières et accessoires">Filières et accessoires</a></li><li class="yCmsComponent">
<a href="/fr/c-10-20-30" title="Fraises à fileter">Fraises à fileter</a></li><li class="yCmsComponent">
<a href="/fr/c-10-20-40" title="Outils à fileter à plaquette">Outils à fileter à plaquette</a></li><li class="yCmsComponent">
<a href="/fr/c-10-20-50" title="Peignes">Peignes</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-25-Verspanen.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-25">Tournage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-25-10" title="Outils d'extérieur">Outils d'extérieur</a></li><li class="yCmsComponent">
<a href="/fr/c-10-25-20" title="Outils d'intérieur">Outils d'intérieur</a></li><li class="yCmsComponent">
<a href="/fr/c-10-25-30" title="Plaquettes de tournage">Plaquettes de tournage</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-30-Ruimen.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-30">Alésage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-30-10" title="Alésoirs à main">Alésoirs à main</a></li><li class="yCmsComponent">
<a href="/fr/c-10-30-20" title="Alésoirs machine">Alésoirs machine</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-35-Verzinken.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-35">Lamage, chanfreinage, ébavurage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-35-10" title="Chanfreinage et lamage">Chanfreinage et lamage</a></li><li class="yCmsComponent">
<a href="/fr/c-10-35-20" title="Ébavurage">Ébavurage</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-45-Kartelrol.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-45">Poinçonnage, moletage, brochage, galetage, gravage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-45-10" title="Poinçonnage, moletage">Poinçonnage, moletage</a></li><li class="yCmsComponent">
<a href="/fr/c-10-45-50" title="Gravage et marquage">Gravage et marquage</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-47-Zagen.png?v=170211224640+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-47">Sciage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-47-10" title="Lames">Lames</a></li><li class="yCmsComponent">
<a href="/fr/c-10-47-30" title="Fraises scie">Fraises scie</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-50-Toebehoren-bewerkingsmachines.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-50">Accessoires de machines-outils</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-50-10" title="Attachements pour outils rotatifs">Attachements pour outils rotatifs</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-20" title="Porte-outils VDI">Porte-outils VDI</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-30" title="Porte-outils à queue polygonale">Porte-outils à queue polygonale</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-40" title="Porte-outils HSK-T">Porte-outils HSK-T</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-50" title="Mandrins et accessoires de tours">Mandrins et accessoires de tours</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-60" title="Périphérie machine">Périphérie machine</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-70" title="Systèmes d'arrosage et de lubrification, pompes">Systèmes d'arrosage et de lubrification, pompes</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-80" title="Bridage des pièces">Bridage des pièces</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-90" title="Palpeurs et accessoires de perçage">Palpeurs et accessoires de perçage</a></li><li class="yCmsComponent">
<a href="/fr/c-10-50-95" title="Accessoires pour attachements rotatifs">Accessoires pour attachements rotatifs</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-55-smering-voor-bewerking.png?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-55">Lubrification pour usinage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-55-10" title="Liquides de coupe">Liquides de coupe</a></li><li class="yCmsComponent">
<a href="/fr/c-10-55-40" title="Aspiration des brouillards d'huile">Aspiration des brouillards d'huile</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-70-Halffabrikaten.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-70">Semi-produits</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-70-10" title="Thermoplastiques">Thermoplastiques</a></li><li class="yCmsComponent">
<a href="/fr/c-10-70-60" title="Fontes et aciers">Fontes et aciers</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-80-spuitgieten.png?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-80">Équipements moulistes</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-80-20" title="Vis et fourreaux">Vis et fourreaux</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-85-Uitrusting-elektroerosie.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-85">Équipements pour l'électro-érosion</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-85-30" title="Filtres">Filtres</a></li><li class="yCmsComponent">
<a href="/fr/c-10-85-50" title="Accessoires et pièces">Accessoires et pièces</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="10-90-schuurmiddelen.png?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-90">Abrasifs</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-10-90-10" title="Fraises limes">Fraises limes</a></li><li class="yCmsComponent">
<a href="/fr/c-10-90-20" title="Limes">Limes</a></li><li class="yCmsComponent">
<a href="/fr/c-10-90-30" title="Abrasifs agglomérés ou vitrifiés">Abrasifs agglomérés ou vitrifiés</a></li><li class="yCmsComponent">
<a href="/fr/c-10-90-40" title="Abrasifs appliqués">Abrasifs appliqués</a></li><li class="yCmsComponent">
<a href="/fr/c-10-90-50" title="Brosses">Brosses</a></li><li class="yCmsComponent">
<a href="/fr/c-10-90-60" title="Polissage et lustrage">Polissage et lustrage</a></li><li class="yCmsComponent">
<a href="/fr/c-10-90-70" title="Tribofinition">Tribofinition</a></li></ul>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>
<li class="megamenu-trigger tab-nav-green ">
  <a href="/fr/c-90" title="Soudage">Soudage</a><div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              <img alt="" src="90-10-lasapparatuur.png?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-10">Générateurs de soudage et de coupage</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-10-10" title="Générateurs MMA">Générateurs MMA</a></li><li class="yCmsComponent">
<a href="/fr/c-90-10-20" title="Générateurs TIG">Générateurs TIG</a></li><li class="yCmsComponent">
<a href="/fr/c-90-10-30" title="Générateurs MIG/MAG">Générateurs MIG/MAG</a></li><li class="yCmsComponent">
<a href="/fr/c-90-10-40" title="Générateurs plasma">Générateurs plasma</a></li><li class="yCmsComponent">
<a href="/fr/c-90-10-50" title="Equipements de soudage électrique">Equipements de soudage électrique</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-20-Vlamlassen.jpg?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-20">Soudage chauffage coupage flamme</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-20-10" title="Soudage flamme">Soudage flamme</a></li><li class="yCmsComponent">
<a href="/fr/c-90-20-20" title="Chauffage flamme">Chauffage flamme</a></li><li class="yCmsComponent">
<a href="/fr/c-90-20-30" title="Coupage flamme">Coupage flamme</a></li><li class="yCmsComponent">
<a href="/fr/c-90-20-35" title="Matériel aeropropane">Matériel aeropropane</a></li><li class="yCmsComponent">
<a href="/fr/c-90-20-40" title="Accessoires flamme">Accessoires flamme</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-30-vulmetalen.png?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-30">Métaux d'apport</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-30-10" title="Métaux d'apport">Métaux d'apport</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-40-orbitaal-lassen.png?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-40">Machines orbitales</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-40-10" title="Générateurs soudage orbital">Générateurs soudage orbital</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-50">Machines automatiques</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-50-10" title="Robots">Robots</a></li><li class="yCmsComponent">
<a href="/fr/c-90-50-20" title="Automatisation">Automatisation</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-60-weerstandlassen.png?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-60">Soudage par résistance</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-60-10" title="Soudage par résistance">Soudage par résistance</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-75-Plasmalassen.jpg?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-75">Soudage plasma</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-75-10" title="Générateurs de soudage plasma">Générateurs de soudage plasma</a></li><li class="yCmsComponent">
<a href="/fr/c-90-75-15" title="Générateurs micro plasma">Générateurs micro plasma</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-80-luchtbehandeling.png?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-80">Traitement de l'air</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-80-10" title="Turbines filtre aspirante">Turbines filtre aspirante</a></li><li class="yCmsComponent">
<a href="/fr/c-90-80-20" title="Installation centralisée">Installation centralisée</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="90-90-solderen.png?v=170211224645+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-90-90">Soudures</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-90-90-10" title="Soudures">Soudures</a></li></ul>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>
<li class="megamenu-trigger tab-nav-blue ">
  <a href="/fr/c-15" title="Transmission">Transmission</a><div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              <img alt="" src="15-15-Lagertechniek.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-15">Technique des roulements</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-15-15" title="Roulements">Roulements</a></li><li class="yCmsComponent">
<a href="/fr/c-15-15-20" title="Paliers lisses / rotules">Paliers lisses / rotules</a></li><li class="yCmsComponent">
<a href="/fr/c-15-15-25" title="Paliers / corps de palier">Paliers / corps de palier</a></li><li class="yCmsComponent">
<a href="/fr/c-15-15-30" title="Maintenance / Accessoires / Entretien">Maintenance / Accessoires / Entretien</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-20-lineair-techniek.png?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-20">Technique linéaire</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-20-15" title="Guidages lisses / guidages sur rail">Guidages lisses / guidages sur rail</a></li><li class="yCmsComponent">
<a href="/fr/c-15-20-20" title="Arbres et douilles à billes / Guidages à rouleaux">Arbres et douilles à billes / Guidages à rouleaux</a></li><li class="yCmsComponent">
<a href="/fr/c-15-20-30" title="Modules / systèmes">Modules / systèmes</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-22-Riemen-en-kettingtechniek.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-22">Technique de courroies et de chaînes</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-22-20" title="Transmissions par courroie">Transmissions par courroie</a></li><li class="yCmsComponent">
<a href="/fr/c-15-22-25" title="Transmission par chaîne">Transmission par chaîne</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-25-Aandrijvingen.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-25">Entraînements et tabliers à rouleaux</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-25-15" title="Eléments d'entraînement">Eléments d'entraînement</a></li><li class="yCmsComponent">
<a href="/fr/c-15-25-40" title="Éléments de convoyage">Éléments de convoyage</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-26-askoppelingtechniek.png?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-26">Accouplements d'arbres</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-26-30" title="Accouplements">Accouplements</a></li><li class="yCmsComponent">
<a href="/fr/c-15-26-35" title="Éléments de liaison">Éléments de liaison</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-30-Afdichtingstechniek-aandrijving.jpg?v=170211224641+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-30">Technique d'étanchéité</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-30-15" title="Joints statiques">Joints statiques</a></li><li class="yCmsComponent">
<a href="/fr/c-15-30-20" title="Joints dynamiques">Joints dynamiques</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-60-Dempingtechniek.jpg?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-60">Technique d'amortissement</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-60-10" title="Amortisseurs/ressorts">Amortisseurs/ressorts</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="15-90-smeertechniek-aandrijving.png?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-15-90">Technique de graissage d'éléments transmission</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-15-90-10" title="Moyens et systèmes de graissage">Moyens et systèmes de graissage</a></li></ul>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>
<li class="megamenu-trigger tab-nav-darkblue ">
  <a href="/fr/c-20" title="Pneumatique et fluiditique">Pneumatique et fluiditique</a><div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              <img alt="" src="20-10-Pneumatiek.jpg?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-20-10">Pneumatique</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-20-10-10" title="Conditionnement de l'air comprimé">Conditionnement de l'air comprimé</a></li><li class="yCmsComponent">
<a href="/fr/c-20-10-15" title="Composants pneumatiques">Composants pneumatiques</a></li><li class="yCmsComponent">
<a href="/fr/c-20-10-20" title="Accessoires pneumatiques">Accessoires pneumatiques</a></li><li class="yCmsComponent">
<a href="/fr/c-20-10-90" title="Compresseurs et systèmes à air comprimé">Compresseurs et systèmes à air comprimé</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="20-12-hydrauliek.png?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-20-12">Hydraulique</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-20-12-10" title="Entraînement hydraulique">Entraînement hydraulique</a></li><li class="yCmsComponent">
<a href="/fr/c-20-12-20" title="Contrôle du procès hydraulique">Contrôle du procès hydraulique</a></li><li class="yCmsComponent">
<a href="/fr/c-20-12-30" title="Technique de raccordement hydraulique">Technique de raccordement hydraulique</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="20-14-afdichtingstechniek.png?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-20-14">Technique d'étanchéité</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-20-14-15" title="Garnitures de presse-étoupes">Garnitures de presse-étoupes</a></li><li class="yCmsComponent">
<a href="/fr/c-20-14-20" title="Joints plats">Joints plats</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="20-30-meet-regeltechniek.png?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-20-30">Technique de mesure et contrôle</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-20-30-10" title="Composants et capteurs de mesure">Composants et capteurs de mesure</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="20-35-slangen-koppeling.png?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-20-35">Tuyauterie et tubes</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-20-35-10" title="Tuyaux / Tubes">Tuyaux / Tubes</a></li><li class="yCmsComponent">
<a href="/fr/c-20-35-20" title="Elements de fixation / protection">Elements de fixation / protection</a></li></ul>
              </div>
            </li>
          <li class="range">
            <div class="range-visual">
              <img alt="" src="20-50-filtering-onderhoud.png?v=170211224642+0100">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-20-50">Filtration et entretien</a>
              <ul class="range-categories-list">
                  <li class="yCmsComponent">
<a href="/fr/c-20-50-10" title="Entretien de fluides">Entretien de fluides</a></li><li class="yCmsComponent">
<a href="/fr/c-20-50-20" title="Eléments filtrants">Eléments filtrants</a></li></ul>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>

  
  
  
  
  
  
  
  
  <li class="megamenu-trigger  ">
  </li>
<li class="megamenu-trigger  ">
  <div class="megasubmenu">
    <div class="megasubmenu-wrapper">
    <ul class="range-list">
      
        <li class="range">
            <div class="range-visual">
              </div>
            <div class="range-categories">
              <a class="range-name" href="/fr/c-10-10">TEST NAVIGATION NODE NILS LEVEL 2</a>
              </div>
            </li>
          </ul>
    </div>
    </div>
  </li>
</ul><a href="#" class="close-megamenu-touch">x</a>
    </div>
</div>








<div id="cart_popup" class="popin-block no-padding small mfp-hide">
  <div class="popin-content" id="cart_popup_content">
  </div>
</div><div id="infoPopup" class="popin-block popin-text mfp-hide">
  <div id="infoPopupContent" class="popin-content">
    
  </div>
</div><div class="site-content">
            <input type="hidden" name="homePageVar" value=".wrapper-input" /> 
    <div class="search-block search-block-home" style="background-image:url('{{asset('images/Untitled-BW.jpg')}}');
	background-position:bottom;">  
    <div class="container">
              <div class="search-block-wrapper">
                  <p class="search-title">Toutes vos fournitures industrielles</p>
                  <!-- <p><strong>200 agences en France, plus de 130 000 références, chez vous en 24/48H</strong></p> -->
                  <form name="search_form" method="post" action="{{url('/search')}}" class="clearfix wrapper-search-combo">
				       {{ csrf_field() }}
                      <p class="wrapper-input">
                          <input id="search" class="siteSearchInput left ui-autocomplete-input" type="text" name="search" value="" placeholder="par article." data-options='{"autocompleteUrl" : "/fr/search/autocomplete/SearchBox","minCharactersBeforeRequest" : "3","waitTimeBeforeRequest" : "300","displayProductImages" : true}' autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
              <style type="text/css">
      
              </style>
                          <button class="main-search icon"><img src="{{asset('images/magnifier.png')}}"></button>
                      </p>
                  </form>
  
              
              </div>
          </div>
    </div>
  <div class="container">
  <div class="site-wrapper">
    <div id="globalMessages">
      </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="brand-carousel-ctn">
         <div class="brand-carousel">
             <ul>
              <li>
                       <!--<a href="/fr/c-essentiels-psh?view=grid" >
                           <img src="{{asset('storage/'.$pictures[0]->picture)}}" title="selection_essentiels_psh_v2.jpg"/>
                       </a>-->
					 <iframe width="520" height="520" src="https://www.youtube.com/embed/B1L8p9glEIo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   </li>
                 </ul>
         </div>
       
         <div class="brand-carousel-pagination"></div>
     </div>
</div>



      <div class="col-sm-6">
        <div class="yCmsContentSlot wrapper-image">
<a href="/fr/bons-plans/c-bons-plans" title="" >  
            <img title="OREXAD-slideshow-BP28-534_V01.jpg" alt="OREXAD-slideshow-BP28-534_V01.jpg" src="{{asset('storage/'.$pictures[1]->picture)}}" class="img-responsive promo">
            </a>
          <a href="/fr/boutique-les-essentiels" title="" >  
            <img title="OREXAD-slideshow-Essentiels2018-534_V01.jpg" alt="OREXAD-slideshow-Essentiels2018-534_V01.jpg" src="{{asset('storage/'.$pictures[2]->picture)}}" class="img-responsive promo">
            </a>
          </div><div class="yCmsContentSlot wrapper-image hidden-xs">
</div></div>




    </div>
    
    <div class="wrapper-title">
          <p class="uppercase bottom-5 title line"><span>Notre Sélection</span></p>
          </div>
    <div class="product-carousel">
    <ul class="products-grid">
	@foreach($pubs as $pub)
      <li>
          <div class="productItem productGridItem clearfix">
             <div class="product-image">
                    <div class="thumb">
                      <a href="{{url('artsItem/'.$pub->id)}}" title="RUBAN POLYPROPYLENE ACRYL TRANSP 04024 100 M X 50 MM T">
                   <img src="{{asset('storage/'.$pub->picture)}}" alt="RUBAN POLYPROPYLENE ACRYL TRANSP 04024 100 M X 50 MM T" title="RUBAN POLYPROPYLENE ACRYL TRANSP 04024 100 M X 50 MM T" class="img-responsive product_zoom"/>
      </a>
                    </div>
                 </div>
                 <div class="product-description">
                  <p class="product-name">
                        <a href="{{url('artsItem/'.$pub->id)}}" title="RUBAN POLYPROPYLENE ACRYL TRANSP 04024 100 M X 50 MM T" class="productMainLink">{{$pub->title}}</a>
                    </p>
                    <div class="brand-bar">
                      <p class="title-brandname brandNameIsBold"></p>
                            <p></p>
                          </div>
                    <div class="rate-bar">
                      <a href="{{url('artsItem/'.$pub->id)}}"  title="+ d’articles">+ d’articles(1)</a>
                      </div>
                 </div>
                 <div class="product-price">
                  <p class="price" >
                            <!--<strong>{{$pub->new_price}} € par unité<sup>HT</sup>
                                  </strong>
								  @if($pub->old_price != 'no')
                            <span class="old-price">Au lieu de&nbsp;{{$pub->old_price}} €</span> -->
@endif						
                            </p>
                        </div>
                 <div class="boxGrey clearfix">
				 @if($pub->disponibilitie != 'no')
                    <p class="icon availability green" title="Disponible">
                    Disponible</p>
					@endif
                    </div>
          </div>
          </li>
		  @endforeach

  
      </ul>
  <ul class="product-carousel-navigation">
           <li><a href="#" title="Précédent" class="prev prev_pdct">Précédent</li>
           <li><a href="#" title="Suivant" class="next next_pdct">Suivant</a></li>
     </ul>
     </div>
<div class="content"><div class="row"><div class="col-xs-6 col-sm-4"><a href="#"><img src="/medias/sys_master/images/images/h47/h62/9884962455582/3M-Boutique.jpg" class="img-responsive" alt=""/></a></div><div class="col-xs-6 col-sm-4"><a href="/boutique/giss"><img src="/medias/sys_master/images/images/h2c/h62/9578195419166/giss-banner-page-accueil-orexad.jpg" class="img-responsive" alt=""/></a></div><div class="col-xs-6 col-sm-4 hidden-xs"><a href="#"><img src="/medias/sys_master/images/images/he2/ha6/9299193364510/nos-boutiques-de-marques-facom.jpg" class="img-responsive" alt=""/></a></div></div><div class=" visible-xs centered"><a href="#" class="mobile-moar" >Voir toutes nos boutiques</a></div></div><div class="content"><div class="wrapper-title">
<p class="uppercase bottom-5 title line"><span>Nos marques partenaires</span></p>
<p class="uppercase bottom-5"><a class="right-link" href="#">Voir toutes nos marques partenaires</a></p>
</div>
<ul class="img-list clearfix partner-img-list">
    <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/3m-logo-png-transparent.png')}}" id="Partner_brand" alt="marque-partenaire-facom" width="100" height="100" /></a></li>
    <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/2000px-Loctite-Logo.svg.png')}}" id="Partner_brand" alt="marque-partenaire-fag" width="100" height="100" /></a></li>
  
    <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/Schmalz.svg.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100" /></a></li>
	 <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/Ansell_logo.svg.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
	 
	  <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/nordson.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
	  
	    <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/logo-facom.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
		 <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/logo-s24.jpg')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
		  <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/images.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
		   <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/1452.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
		    <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/microgard-logo.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
			 <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/jelt.jpg')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
			  <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/giss.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
			   <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/mure.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
			    <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/kar.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
				 <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/prev.jpg')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
				  <li style="margin: 10px;display: inline-block;"><a href="#"><img title="Boutique" src="{{asset('images/martor.png')}}" id="Partner_brand" alt="marque-partenaire-kimberly-clark" width="100" height="100"/></a></li>
	 
	 
	 
	 
</ul></div><div class="content"><div class="wrapper-title">
<p class="uppercase bottom-5 title line"><span>A propos d'Novindus</span></p>
</div>

<p>En Janvier 2006, Novindus est crée en tant que centrale d'achats pour répondre aux attentes des industriels Marocains avec un service de proximité efficace et de qualité, pour différents produits et services.</p>
<ul>
<li>Fournitures industrielle</li>
<li>Consommables de production</li>
<li>Equipements et machines spécifiques</li>
<li>Maintenance Industrielle</li>
</ul>
<div id="map" style="width:100%;height:500px;"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.7101333, lng:  -5.9198506},
          zoom: 17
        });
		var marker = new google.maps.Marker({
          position: {lat: 35.7101333, lng:  -5.9198506},
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV95u_7uqdqipqOBvcemw1uMuedqhgcrc
&callback=initMap"
    async defer></script>

 </div>

</div></div>
</div>
</div>  
   
   
   
   
       
        <style>
        .footer{background-color:red;}</style>
        <div class="yCmsContentSlot footer">
<div class="content"><div id="footer">
<style>
.footer-middle{background-color:#000;}
</style>
<div class="footer-middle">
<div style="margin-bottom:10px;" class="container">
<div class="col-sm-6 col-md-3">
<div class="links links-about">
<p class="title-subfooter footer-submenu-trigger">A propos de Dovindus</p>
<ul>
@foreach($page_propos as $i1)
    <li><a title="Lien" href="{{url('page/'.$i1->id)}}">{{$i1->title}}</a></li>
    
	@endforeach
</ul>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="links">
<p class="title-subfooter footer-submenu-trigger">Services clients</p>
<ul>
   @foreach($page_client as $i1)
    <li><a title="Lien" href="{{url('page/'.$i1->id)}}">{{$i1->title}}</a></li>
    
	@endforeach
</ul>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="links">
<p class="title-subfooter footer-submenu-trigger">Pratique</p>
<ul>
    @foreach($page_pratique as $i1)
    <li><a title="Lien" href="{{url('page/'.$i1->id)}}">{{$i1->title}}</a></li>
    
	@endforeach
</ul>
</div>
</div>
<div class="col-sm-6 col-md-3 payment"><!--<p class="title-h3">Recevez les promotions, nouveaut&eacute;s et exclusivit&eacute;s<p class="title-h3"><form class="footer-form"><input type="text" name="mail" value="" placeholder="Votre adresse mail" /><button class="icon arrow">Envoyer</button></form>-->
<div class="links">
<p class="title-subfooter footer-submenu-trigger">Offres du moment</p>
<ul>
    @foreach($page_offre as $i1)
    <li><a title="Lien" href="{{url('page/'.$i1->id)}}">{{$i1->title}}</a></li>
    
	@endforeach
</ul>
</div>
<div class="links"><br />

<br />

</div>
</div>
</div>
</div>
</div></div></div>


















</div>
    </div>
    </div>
    <div class="message-display"></div>
  <form name="accessiblityForm">
    <input type="hidden" id="accesibility_refreshScreenReaderBufferField"
      name="accesibility_refreshScreenReaderBufferField" value="" />
    </form>
    
   

<script type="text/javascript" src="{{asset('js/combined_lib_common.js?id=1523874196307')}}"></script>
    <script type="text/javascript" src="{{asset('js/combined_specific_common.js?id=1523874196307')}}"></script>
  <script type="text/javascript" src="{{asset('js/combined_homepage.js?id=1523874196307')}}"></script>
  <script type="text/javascript" src="{{asset('js/combined_theme_common.js?id=1523874196307')}}"></script>
 <script type="text/javascript">
  
    var pageType = 'HOME';
    var iswithoutReco ='false';
    var isPriceDisplayed ='true';
    var isCartsMerged ='';
  </script>
    
  
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"28138161","applicationTime":498,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"fc6b3ffecc","transactionName":"YwMDNhZYD0FVU0NfXVpJMhIWUA9Vd19ZQkBbCg0HFhZBGnN1Yx8=","agent":"","errorBeacon":"bam.nr-data.net"}</script>

	 
 </body>
</html>