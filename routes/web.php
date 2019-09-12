<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

                                        // ROTAS COMUNS

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function(){
    return "Bem vindo, companheiro!";
});

Route::get('/welcome/{nome}/{idade}', function($nome, $idade){

    return "Seja bem vindo ".$nome.", você tem ".$idade." anos de idade";
});


                                    // ROTAS COM PARÂMETROS OPCIONAIS


Route::get('/busca/{nome?}', function($nome = null){
    
    if(isset($nome)){
        return "Você buscou pelo nome = ".$nome;
    }else{
        return "Você não passou o nome como parâmetro";
    }
    
    
});



                                       // ROTAS COM REGRAS    

Route::get('/rotacomregra/{nome}/{n}', function($nome, $n){

    for($i=0;$i<$n;$i++){
        echo $nome." <br>";
    }
})->where('n','^[0-9]{1,2}');

                                       // ROTAS COM REGRAS  

Route::prefix('/admin')->group(function(){

    Route::get('/users', function(){
        return "Admin/users";
    });

    Route::get('/products', function(){
        return "Admin/products";
    });
    
    Route::get('/files', function(){
        return "Admin/files";
    });

    Route::get('/new/cash/{valor}', function($valor){
        return "Admin/newCash valor".$valor;
    });

    Route::get('/new/data/{valor}', function($valor){
        return "Admin/new Data valor 2 ".$valor;
    });
});