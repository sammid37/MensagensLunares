<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\User;
use App\Mensagem;
use DB;
use Auth;

class MensagemController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
      $id = Input::get('id');
      return view('mensagem');
      
  }
  public function create(){
    return view('mensagem.novamensagem');
  }
  public function store(){
    //usando Facade
    // funcionaaaaa!!
    $user = Auth::user();
		$mensagem = new Mensagem;
		$mensagem->titulomensagem = Input::get('titulomensagem');
		$mensagem->corpomensagem = Input::get('corpomensagem');
		$mensagem->categoriamensagem = Input::get('categoriamensagem');
    $mensagem->user_id = $user->id;
		$mensagem->save();
    $id = $mensagem->id;
    // redireciona o usuário para a tela que exibe a mensagem cadastrada
		return redirect()->to (route('mensagem.mostrarmensagem', ['id' => $id]));
    
  }
  public function show($id){
    $autor = Auth::user()->id;
    $mensagem = Mensagem::find($id);//->where('user_id', $auto;
    if($mensagem->user_id == $autor){
      return view('mensagem.mostrarmensagem', ['mensagem'=> $mensagem]);	
    }else {
      return redirect('home');
    }
  }
}
