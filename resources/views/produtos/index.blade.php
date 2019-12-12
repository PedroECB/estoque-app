@extends('layout.main')

@section('title','Produtos')

@section('content')
                                                    <!-- Tabela de produtos -->

      <div class="container">
        <div class="row">
            <div class="offset-1"></div>
                <div class="col-md-10">
                    <div class="card mt-5">
                        <div class="card-header mb-0">
                            <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Produtos</span> 
                            
                        </div>
                        <div class="card-body pt-2">
                            <div class="container">
                                <div class="row justify-content-lg-between">

                                    <a href="{{route('produtos.create')}}"><button class="btn dark-blue btn-sm font-weight-bold text-white"><i class="fa fa-plus"></i> Adicionar</button></a>
                                        
                                        <form action="" method="GET">
                                            <div class="class-search d-flex">           
                                                    <div class="input-group input-group-sm ml-2">
                                                        <input type="search" placeholder="Buscar" name="product" id="searchProduct" class="form-control form-control-sm" aria-label="Buscar produto" aria-describedby="my-search">
                                                        <div class="input-group-append input-group-append-sm">
                                                            <span class="input-group-text input-group-text-sm" id="my-search"><i class="fa fa-search d-block" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                </div>         
                            </div>
                            <hr>

                            <table class="table table-sm table-bordered">
                                <thead class="teko-font gray-text text-center">
                                    <th>Produto</th>
                                    <th>Descrição</th>
                                    <th>Preço R$</th>
                                    <th>Quantidade</th>
                                    <th></th>
                                </thead>
                                                                <!-- Listagem de produtos -->
                                <tbody>

                                    {{-- <tr>
                                        <td class="text-center font-weight-bold teko-font">Carregador Turbo Apple</td>
                                        <td class="product-description">Carregador Apple TBX 3.4AMP cabo dobrável </td>
                                        <td class="text-right font-weight-bold ubuntu-font">2.799,00</td>
                                        <td class="text-center font-weight-bold ubuntu-font">6</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm"><i class="fa fa-list"></i></button>
                                            <button class="btn btn-sm"><i class="fa fa-wrench"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr> --}}

                                    @if(empty($produtos))
                                        <h3 class="text-center text-info">Nenhum produto cadastrado</h3>
                                    @endif
                                    
                                    @foreach ($produtos as $produto)
                                    <tr>
                                        <td class="text-center font-weight-bold teko-font">{{$produto->nome}}</td>
                                        <td class="product-description w-50">{{$produto->descricao}} </td>
                                        <td class="text-right font-weight-bold ubuntu-font">{{number_format($produto->preco,2,',','.')}}</td>
                                        <td class="text-center font-weight-bold ubuntu-font">{{$produto->quantidade}}</td>
                                        <td class="text-center">
                                            <a title="Visualizar" href="{{route('produtos.show', $produto->id)}}"><button class="btn btn-sm"><i class="fa fa-list"></i></button></a>
                                            <a title="Editar" href="{{route('produtos.edit', $produto->id)}}"><button class="btn btn-sm"><i class="fa fa-pencil-square-o"></i></button></a>
                                            

                                            <form style="display:inline;" action="{{route('produtos.destroy', $produto->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('Deseja realmente excluir esse produto?');" title="Excluir" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button> 
                                            </form>
                                                
               
                                            
                                        </td>
                                    </tr>
                                    @endforeach 

                                </tbody>

                            </table>


                            

                            <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center pagination-sm">
                                      <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                          <span aria-hidden="true">&raquo;</span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </nav>
                        </div>
                    </div>
                </div>
            <div class="offset-1"></div>
                

      
       
        </div>
      </div>

@endsection