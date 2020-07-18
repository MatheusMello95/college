@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    
    <h1>Configurações</h1>

    <form method="POST">
        @csrf

        Nome: <br />
        <input type="text" name="name"><br>
        
        Idade: <br />
        <input type="text" name="name"><br>

        Cidade: <br />
        <input type="text" name="name"><br>    

        <input type="submit" value="Enviar">
    </form>
@endsection