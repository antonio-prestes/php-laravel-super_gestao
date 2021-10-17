@extends('app.layouts.basic')

@section('title', 'Produtos')

@section('content')
    <div class="titulo-pagina-app">
        <p>Produto - Adicionar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('produto.index')}}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            <form action="" method="post">
                @csrf
                <input type="text" name="nome" value="" placeholder="Nome"
                       class="borda-preta"/>
                <input type="text" name="descricao" value="" placeholder="Descrição"
                       class="borda-preta"/>

                <select name="unidade_id">
                    <option value="">Selecione a unidade de medida</option>
                    @foreach($unidades as $unidade)
                    <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                    @endforeach
                </select>

                <input type="number" name="peso" value="" placeholder="Peso"
                       class="borda-preta"/>
                <input type="number" name="estoque_minimo" value="" placeholder="Estoque Minimo"
                       class="borda-preta">
                <input type="number" name="estoque_maximo" value="" placeholder="Estoque Máximo"
                       class="borda-preta">
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection