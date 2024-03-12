<!- 

@extends('layout.master')

@section ('conteudo')


<h1> CONTATO </h1>

@if( Session('sucesso'))
<div class="alert alert-sucess">
    {{ Session('sucesso') }}
</div>
@endif

<form action="{{ url('/contato') }}" method="post">

        @csrf

    <div>
        <label class="form-label">Nome</label>
        <input name= "nome" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror"/>
        @error('nome')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div>
    <label class="form-label">email</label>
        <input name= "email" type = "email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"/>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
     <div> 
        <label>Mensagem</label>
        <textarea class="form-control @error('mensagem') is-invalid @enderror" name = "mensagem">{{ old('mensagem') }}</textarea>
        @error('mensagem')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>
@endsection