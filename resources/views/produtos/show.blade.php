@extends('layout.main')

@section('title','Informações do Produto')

@section('content')
    
      <div class="container">
        <div class="row">
            <div class="offset-2"></div>
                <div class="col-md-8">

                                        <!-- Card de cadastro de produtos -->

                    <div class="card mt-5">
                        <div class="card-header mb-0">
                            <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Informações do Produto</span>    
                        </div>
                        <div class="card-body">
                          <table class="table table-sm table-hover table-responsive table-borderless table-striped">
                            
                            <tr><td class="font-weight-bold">Nome:</td> <td class="font-weight-bold text-info text-right"><i class="fa fa-shopping-bag"></i> Motorola One</td></tr>
                            <tr><td class="font-weight-bold">Preço:</td> <td class="font-weight-bold text-success text-right">R<i class="fa fa-dollar"></i> 1.380,00</td></tr>
                            <tr><td class="font-weight-bold">Descrição:</td> <td class="text-justify text-dark-blue font-italic">Motorola capa preta Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet natus suscipit, adipisci iste ipsa</td></tr>
                            <tr><td class="font-weight-bold">Fornecedor:</td> <td class="text-right"><i class="fa fa-truck"></i> Tel Imports</td></tr>
                            <tr><td class="font-weight-bold">Última entrada:</td> <td class="text-right"><i class="fa fa-calendar"></i> 25/04/2019</td></tr>
                            <tr><td class="font-weight-bold">Código de barras:</td> <td class="text-right"><i class="fa fa-barcode"></i> 487977888</td></tr>
                            <tr><td class="font-weight-bold">NFC-e Code:</td> <td class="text-right"><i class="fa fa-qrcode"></i> 41003-01</td></tr>
                            <tr class=""><td class="font-weight-bold">Quantidade:</td> <td class="font-weight-bold text-right"><i class="fa fa-cubes"></i> 27</td></tr>

                          </table>
                          <div class="card-footer d-flex justify-content-between">
                              <button class="btn btn-sm btn-info font-weight-bold"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
                              <button class="btn btn-sm font-weight-bold"><i class="fa fa-list-alt" aria-hidden="true"></i> Relatório</button>
                              <button class="btn btn-sm font-weight-bold" onclick="window.history.back();"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button>
                          </div>
                        </div>
                    </div>

            <div class="offset-2"></div>
        </div>
      </div>

@endsection