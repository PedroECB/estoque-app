<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{

    public function index(){
        return "Listando os produtos... pi pi";
    }


    public function nome($nome){
        return "Seja bem vindo ".$nome;
    }

    public function soma($a, $b){
        return $a+$b;
    }


}