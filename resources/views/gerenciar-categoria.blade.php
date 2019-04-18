@extends('includes.template')

@section('content')

<div class="container">
  <h2>Minhas Categorias</h2>        
<a href="createCat"><button class="btn btn-primary" style="float: left;">Cadastrar</button></a>
  <table class="table">
    <thead>
      <tr>
        <th style="text-align: center;">Nome</th>
        <th style="text-align: center;">Data de Criação</th>
        <th style="text-align: center;">Ação</th>
      </tr>
    </thead>
    <tbody>
@foreach ($categorias as $linha)
      <tr>
        <td>{{$linha->nome}}</td>
        <td>{{$linha->created_at}}</td>
        <td><a href='{{url("/{$linha->id}/editCat")}}'><i class="fa fa-pencil" style="padding: 5px; color: white; background-color: #4286f4;"></i></a> - <a href='{{url("/{$linha->id}/deleteCat")}}'><i class="fa fa-trash" style="padding: 5px; color: white; background-color: red;"></i></a></td>
      </tr>
@endforeach
    </tbody>
  </table>

@endsection