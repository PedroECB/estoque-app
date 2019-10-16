<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $title = "Produtos";
        $produtos = Produto::all();

        return view('produtos.index', ["title"=>$title, "produtos"=>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Editar Produto";

        return view('produtos.create',["title"=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        $produto = new Produto;

        $produto->nome = $dados['produto'];
        $produto->preco = (double) $dados['preco'];
        $produto->descricao = $dados['descricao'];
        $produto->fornecedor = $dados['fornecedor'];
        $produto->data_entrada = $dados['dataEntrada'];
        $produto->cod_barras = $dados['cod_barras'];
        $produto->nfce_code = $dados['nfce'];
        $produto->quantidade = $dados['quantidade'];
        $produto->fornecedor_id = 2;

        $produto->save();

        $msg = 'Produto cadastrado com sucesso';

        return view('produtos.create',['success'=>$msg]);
        unset($msg);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $produto = Produto::find($id);

        if(empty($produto)){
            throw new \Exception('Produto não encontrado');
            exit;
        }
        return view('produtos.show', ['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        
        if(empty($produto))
        {
            throw new \Exception('Produto não encontrado');
        }
        return view('produtos.edit', ['produto'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $dados = $request->all();

        Produto::where('id', $id)->update(
            ['nome'=>$dados['nome'],
             'preco'=>(double)$dados['preco'],
             'descricao'=>$dados['descricao'],
             'fornecedor'=>$dados['fornecedor'],
             'data_entrada'=>$dados['dataEntrada'],
             'cod_barras'=>$dados['codBarras'],
             'nfce_code'=>$dados['nfce'],
             'quantidade'=>$dados['quantidade'],
             'fornecedor_id'=>1
            ]
        );

        $produto = Produto::find($id);

        $msg = 'As alterações foram salvas.';

        return view('produtos.edit', ['produto'=>$produto, 'success'=>$msg]);
        unset($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
