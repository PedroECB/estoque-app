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

use Illuminate\Http\Request;

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

                                       // AGRUPAMENTO DE ROTAS  

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
                                                    // AGRUPAMENTO DE ROTAS

Route::prefix('/app')->group(function () {
    
    Route::get('/users', function () {
        return "APP/USERS";
    })->name('app.users');

    Route::get('/profile', function(){
        return "APP/PROFILE";
    })->name('app.profile');
});

                                                        // REDIRECT


// Route::redirect('URI', 'URI', 301);

Route::get('/algumarota', function(){
    return redirect()->route('nameRoute');
});



                                                    // MÉTODOS HTTP

Route::get('/api', function(){

    $pessoa = ["nome"=>"Pedro Henrique", "idade"=>"22", "nascimento"=>"09-06-1997"];
    
    echo json_encode($pessoa);
});

Route::post('/api', function(Request $request){
    return "Olá POST, Nome:".$request->input('nome');
});

Route::put('/api', function(Request $request){
    return "Olá PUT";
});

Route::delete('/api', function(Request $request){
    return "Olá DELETE";
});

Route::patch('/api', function(Request $request){
    return "Olá PATCH";
});

Route::options('/api', function(Request $request){
    return "Olá OPTIONS";
});



                                            // LINKANDO ROTAS COM CONTROLADORES

Route::get('/produtos', 'MeuControlador@index');

Route::get('/nome/{nome}','MeuControlador@nome');

Route::get('/soma/{a}/{b}','MeuControlador@soma')
->where('a','^[0-9]{1,2}$')
->where('b','^[0-9]{1,2}$');





// Route::resource('produtos', 'ProdutosController'); 
// Esse tipo de rota, cria automaticamente uma chamada 
//da rota para cada tipo de método HTTP os associando a cada função correspondente
// no Controller


//route('rota.name')  adicionar url da rota na ancora da view


Route::get('/clientes','ClienteController@index');
