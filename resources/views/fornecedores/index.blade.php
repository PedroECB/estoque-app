@extends('layout.main')
@section('title','Fornecedores')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
                <div class="col-md-8">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5 class="card-title text-center">Fornecedores</h5>
                        </div>
                            <div class="card-body">
                                <button class="btn btn-sm dark-blue text-white font-weight-bold"><i class="fa fa-plus"></i> Adicionar</button>
                                <table class="table table-sm text-center mt-2">
                                    <thead class="text-center">
                                        <th>Fornecedor</th>
                                        <th>CNPJ</th>
                                        <th>Ações</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kernel Imports</td>
                                            <td class="">89.932.211/0001-76</td>
                                            <td>
                                                <button class="btn btn-sm btn-default"><i class="fa fa-eye"></i></button>
                                                <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger"><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kernel Imports</td>
                                            <td class="">89.932.211/0001-76</td>
                                            <td>
                                                <button class="btn btn-sm btn-default"><i class="fa fa-eye"></i></button>
                                                <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger"><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <div class="card-footer">

                        </div>
                   </div>
                </div>
            <div class="col-2"></div>
        </div>
    </div>

@endsection
