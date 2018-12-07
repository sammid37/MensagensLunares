<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
  public function autorMensagem(){
    return $this->belongsTo('App\User', 'email');    	
  } 
}
