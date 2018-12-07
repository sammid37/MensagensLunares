<?php

namespace App\Http\Controllers;
use App\Mensagem;
use App\User;
use DB;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $allmessages = Mensagem::all();
        $autor = Auth::user()->id;
        $users = DB::select('select distinct m.id, m.titulomensagem, m.corpomensagem, m.categoriamensagem, m.user_id from mensagems m,users u where m.user_id ="'.$autor.'" and u.id = "'.$autor.'"');
        // var_d/ump($users);
        // $autor = User::where('id_user', '=', $user->id);
        // $mensagem = Mensagem::get()
        // ->where('id_user', $user->id);
        // echo ('select * from mensagems m,users u where m.user_id ="'.$autor.'" and u.id = "'.$autor.'"');
        return view('home', ['messages' => $users]);
    }
}
