@extends('index')
@section('content')
<div class="col-6">
    <div>
        <h1>Editando Tipo</h1>
    </div>
    <div>
        <form action="{{ route('tipos.destroy',['tipo' =>$tipo]) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" 
                class="form-control  @error('descricao') is-invalid @enderror"
                id="descricao" 
                placeholder="Exemplo: Cancelado" name="descricao"                
                value="{{ $tipo->descricao ?? old('descricao') }}"
                readonly
                >
                @error('descricao')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-danger">Remover</button>             
            </div>
        </form>
    </div>
</div>
@endsection