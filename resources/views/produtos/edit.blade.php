@extends('layout.main')

@section('title','Cadastrar Produto')

@section('content')

<div class="container">
    <div class="row">
        <div class="offset-2"></div>
        <div class="col-md-8">

                                                    <!-- Card de cadastro de produtos -->
            <div class="card mt-5">
                <div class="card-header mb-0">
                    <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Editar
                        Produto</span>
                </div>
                <div class="card-body pt-2">
                        {{--  @component('components.testalert', ["autor"=>"Pedro Henrique"])
                            <p>O presente texto tem o intuito de auxiliar o usuário no manuseio do sistema legado</p>
                        @endcomponent  --}}

                        @if(isset($success))
                            @component('components.success')
                                {{$success}}
                            @endcomponent
                        @endif

                    <form action="{{route('produtos.update', $produto->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cproduto" class="form-label"><i class="fa fa-shopping-basket"
                                                aria-hidden="true"></i> Nome do produto:</label>
                                        <input type="text" name="nome" id="cproduto" maxlength="20"
                                            class="form-control form-control-sm" value="{{$produto->nome}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-between">

                                    <div class="form-group mr-1">
                                        <label for="cquantidade" class="form-label">Qnt de entrada: </label>
                                        <input type="number" min="1" id="cquantidade" name="quantidade" class="form-control form-control-sm"
                                            placeholder="Total em unidades" value="{{$produto->quantidade}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="cpreco" class="form-label">Valor unidade: </label>
                                        <input type="text" placeholder="R$" id="cpreco" name="preco" class="form-control form-control-sm w-100" 
                                        value="{{number_format($produto->preco,2,',','.')}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cdescricao" class="form-label"><i class="fa fa-barcode"
                                                aria-hidden="true"></i> Cod. Barras:</label>
                                        <input type="text" name="codBarras" id="cdescricao" maxlength="1000"
                                            class="form-control form-control-sm" value="{{$produto->cod_barras}}" required>
                                        <small class="gray-text">Digite apenas números</small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cfornecedor" class="form-label"><i class="fa fa-truck"
                                                aria-hidden="true"></i> Fornecedor:</label>
                                        <select name="fornecedor" id="cfornecedor" class="form-control form-control-sm">
                                            <option value="Kernel Imports">Kernel Imports</option>
                                            <option value="Apple Nation Brasil">Apple Nation Brasil</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cdataentrada" class="form-label"><i class="fa fa-calendar"
                                                aria-hidden="true"></i> Data entrada:</label>
                                        <input class="form-control form-control-sm" type="date" name="dataEntrada"
                                            id="cdataentrada" value="{{$produto->data_entrada}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cNfce" class="form-label"><i class="fa fa-qrcode"
                                                aria-hidden="true"></i> Cód. NFC-e</label>
                                        <input type="text" name="nfce" id="cNfce" value="{{$produto->nfce_code}}" class="form-control form-control-sm"
                                            placeholder="XXXXXX-XX" maxlength="9">
                                        <small class="alert-small text-danger d-none font-weight-bold"
                                            id="alert-nfce">Código inválido</small>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cdescricao" class="form-label">Descrição:</label>
                                    <textarea class="form-control form-control-sm" name="descricao" id="cdescricao"
                                        cols="5" rows="2">{{$produto->descricao}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3 d-flex justify-content-between">
                                    <button class="btn btn-sm btn-success font-weight-bold"><i class="fa fa-check" aria-hidden="true"></i> Salvar</button>
                                </form>
                                <a href="{{route('produtos.index')}}"  class="btn btn-sm btn-light font-weight-bold"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
                                </div>

                            </div>
                        </div>
                        
                </div>
            </div>
    <div class="offset-2"></div>
    </div>
    </div>
    <script src="{{asset('js/validation.js')}}"></script>
    @endsection