<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilUser extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $users = DB::select('select * from users');
      return view('perfil',['users' => $users]);
    }
}
