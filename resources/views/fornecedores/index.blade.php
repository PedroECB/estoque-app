@extends('layout.main')
@section('title','Fornecedores')



@section('content')
    <h3>Listando fornecedores</h3>

    <ul>
        @foreach($fornecedores as $fornecedor)
            <li>{{$fornecedor->nome_fantasia}}</li>
        @endforeach
    </ul>
@endsection