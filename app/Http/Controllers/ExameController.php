<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExameController extends Controller
{
   public function index(){

      return view('exames.lista2');

   }

   public function criar(){

      return view('exames.form2');

   }
}
