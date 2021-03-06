@if(isset($produto->id))
    <form action="{{route('produto.update', ['produto'=>$produto->id])}}" method="post">
        @csrf
        @method('PUT')
        @else
            <form action="{{route('produto.store')}}" method="post">
                @csrf
                @endif

                <select name="fornecedor_id">
                    <option value="">Selecione um fornecedor</option>
                    @foreach($fornecedores as $fornecedor)
                        <option
                            value="{{$fornecedor->id}}"{{ ($produto->fornecedor_id ?? old('fornecedor_id')) ==$fornecedor->id ? 'selected' : '' }}>{{$fornecedor->nome}}</option>
                    @endforeach
                </select>
                {{ $errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : '' }}

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
                        <option
                            value="{{$unidade->id}}"{{ ($produto->unidade_id ?? old('unidade_id')) ==$unidade->id ? 'selected' : '' }}>{{$unidade->descricao}}</option>
                    @endforeach
                </select>
                {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

                <input type="number" name="peso" value="{{ $produto->peso ?? old('peso')}}" placeholder="Peso"
                       class="borda-preta"/>
                {{ $errors->has('peso') ? $errors->first('peso') : '' }}

                <input type="number" name="estoque_minimo"
                       value="{{ $produto->estoque_minimo ?? old('estoque_minimo')}}"
                       placeholder="Estoque Minimo"
                       class="borda-preta">
                {{ $errors->has('estoque_minimo') ? $errors->first('estoque_minimo') : '' }}

                <input type="number" name="estoque_maximo"
                       value="{{ $produto->estoque_maximo ?? old('estoque_maximo')}}"
                       placeholder="Estoque Máximo"
                       class="borda-preta">
                {{ $errors->has('estoque_maximo') ? $errors->first('estoque_maximo') : '' }}

                <button type="submit">Cadastrar</button>
            </form>
