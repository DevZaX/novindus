<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Analytic;

use VisitLog;

class TestController extends Controller
{
   public function hello(){
  $analytic = new Analytic();
       dd($analytic->getMonth(VisitLog::all()));
   }
}
