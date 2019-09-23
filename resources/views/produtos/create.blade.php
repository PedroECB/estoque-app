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
                    <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Cadastrar
                        Produto</span>
                </div>
                <div class="card-body pt-2">
                        @component('components.testalert', ["autor"=>"Pedro Henrique"])
                            <p>O presente texto tem o intuito de auxiliar o usuário no manuseio do sistema legado</p>
                        @endcomponent

                    <form action="{{route('produtos.store')}}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cproduto" class="form-label"><i class="fa fa-shopping-basket"
                                                aria-hidden="true"></i> Nome do produto:</label>
                                        <input type="text" name="produto" id="cproduto" maxlength="20"
                                            class="form-control form-control-sm" autofocus required>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-between">

                                    <div class="form-group mr-1">
                                        <label for="cquantidade" class="form-label">Qnt de entrada: </label>
                                        <input type="number" id="cquantidade" class="form-control form-control-sm"
                                            placeholder="Total em unidades" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="cpreco" class="form-label">Valor unidade: </label>
                                        <input type="text" placeholder="R$" id="cpreco"
                                            class="form-control form-control-sm w-100" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cdescricao" class="form-label"><i class="fa fa-barcode"
                                                aria-hidden="true"></i> Cod. Barras:</label>
                                        <input type="text" name="descricao" id="cdescricao" maxlength="1000"
                                            class="form-control form-control-sm" required>
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
                                            id="cdataentrada">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cNfce" class="form-label"><i class="fa fa-qrcode"
                                                aria-hidden="true"></i> Cód. NFC-e</label>
                                        <input type="text" name="nfce" id="cNfce" class="form-control form-control-sm"
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
                                        cols="5" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3 d-flex justify-content-end">
                                    <button class="btn btn-sm btn-success font-weight-bold"><i class="fa fa-check"
                                            aria-hidden="true"></i> Cadastrar</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
    <div class="offset-2"></div>
    </div>
    </div>
    <script src="{{asset('js/validation.js')}}"></script>
    @endsection