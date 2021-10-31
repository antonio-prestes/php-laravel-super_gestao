@extends('app.layouts.basic')

@section('title', 'Produtos')

@section('content')
    <div class="titulo-pagina-app">
        <p>Produto - Editar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('produto.index')}}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            <form action="{{route('produto.update', ['produto'=>$produto->id])}}" method="post">
                @csrf
                @method('PUT')
                <input type="text" name="nome" value="{{$produto->nome ?? old('nome')}}" placeholder="Nome"
                       class="borda-preta"/>
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                <input type="text" name="descricao" value="{{$produto->descricao ?? old('descricao')}}"
                       placeholder="Descrição"
                       class="borda-preta"/>
                {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                <select name="unidade_id">
                    <option value="">Selecione a unidade de medida</option>
                    @foreach($unidades as $unidade)
                        <option value="{{$unidade->id}}">{{$unidade->descricao}} </option>
                    @endforeach
                </select>

                <input type="number" name="peso" value="{{$produto->peso ?? old('peso')}}" placeholder="Peso"
                       class="borda-preta"/>
                {{ $errors->has('peso') ? $errors->first('peso') : '' }}
                <input type="number" name="estoque_minimo" value="{{$produto->estoque_minimo ?? old('estoque_minimo')}}"
                       placeholder="Estoque Minimo"
                       class="borda-preta">
                {{ $errors->has('estoque_minimo') ? $errors->first('estoque_maximo') : '' }}
                <input type="number" name="estoque_maximo" value="{{$produto->estoque_maximo ?? old('estoque_maximo')}}"
                       placeholder="Estoque Máximo"
                       class="borda-preta">
                {{ $errors->has('estoque_maximo') ? $errors->first('estoque_maximo') : '' }}
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
