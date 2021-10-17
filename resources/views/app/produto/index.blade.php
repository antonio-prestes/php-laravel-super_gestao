@extends('app.layouts.basic')

@section('title', 'Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <p>Produtos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Unidade ID</th>
                        <th>Preço</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->peso}} Kg</td>
                            <td>{{$produto->unidade_id}}</td>
                            <td>R$ {{$produto->preco_venda}}</td>
                            <td><a href="">Excluir</a></td>
                            <td><a href="">Editar</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{ $produtos->appends($request)->links() }}
                <br>
                Exibindo {{$produtos->count()}} fornecedores de {{$produtos->total()}}
                ({{$produtos->firstItem()}} a {{$produtos->lastItem()}})
            </div>
        </div>
    </div>
@endsection