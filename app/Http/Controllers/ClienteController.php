<?php 

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;


 class ClienteController extends Controller{
 
    public function index(){
        

        $clientes = [
            ["nome"=>"Pedro Henrique", "idade"=>22],
            ["nome"=>"João Silva", "idade"=>40],
            ["nome"=>"Benedito Costa", "idade"=>35]
        ];

        $nomes = [
            "Carlos",
            "Silva",
            "Pereira",
            "Mendes"
        ];
        
        return view('clientes.index', compact(['clientes', 'nomes']));
        // return view('clientes.index')->with('clientes',$clientes);
        // return view('clientes.index', ["clientes"=>$clientes]); 
    }
 
 }