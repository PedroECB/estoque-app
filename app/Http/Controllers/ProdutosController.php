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

    public function __construct()
    {
        $this->middleware('auth');
    }


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
        $request->validate([
            'produto'=>'required|min:5|max:15',
            'quantidade'=>'required',
            'cod_barras'=>'required|max:10|unique:produtos',
            'preco'=>'required',
            'dataEntrada'=>'required|date',
            'nfce'=>'required|regex:/^[0-9]{6}-[0-9]{2}$/|unique:produtos,nfce_code'
        ],
    [
        'produto.required'=>'O nome do produto é obrigatório',
        'produto.min'=>'O nome do produto deve ter no mínimo 5 caracteres',
        'produto.max'=>'O nome do produto deve ter no máximo 15 caracteres',
        'quantidade.required'=>'Insira a quantidade do produto',
        'cod_barras.required'=>'insira o código de barras',
        'cod_barras.max'=>'O código de barras deve ter no máximo 10 caracteres',
        'cod_barras.unique'=>'O código de barras inserido já está sendo utilizado',
        'preco.required'=>'Insira o preço do produto',
        'dataEntrada.required'=>'Insira a data de entrada',
        'dataEntrada.date'=>'O formato de data informado é inválido',
        'nfce.required'=>'Insira o código da nota fiscal',
        'nfce.regex'=>'O código inserido é inválido',
        'nfce.unique'=>'O código inserido já está sendo utilizado'
    ]);

        $produto = new Produto;

        $produto->nome = $request->input('produto');
        $produto->preco = (double) $request->input('preco');
        $produto->descricao = $request->input('descricao');
        $produto->fornecedor = $request->input('fornecedor');
        $produto->data_entrada = $request->input('dataEntrada');
        $produto->cod_barras = $request->input('cod_barras');
        $produto->nfce_code = $request->input('nfce');
        $produto->quantidade = $request->input('quantidade');
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
        Produto::where('id', $id)->delete();
       
        return redirect('/produtos');
    }
}
