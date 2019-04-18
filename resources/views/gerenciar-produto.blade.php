@extends('includes.template')

@section('content')

<div class="container">
  <h2>Meus produtos</h2>        
<a href="create"><button class="btn btn-primary" style="float: left;">Cadastrar</button></a>
  <table class="table">
    <thead>
      <tr>
        <th style="text-align: center;">Nome</th>
        <th style="text-align: center;">Categoria</th>
        <th style="text-align: center;">Ação</th>
      </tr>
    </thead>
    <tbody>
@foreach ($produtos as $linha)
      <tr>
        <td>{{$linha->nome}}</td>
        <td>{{$linha->categoria}}</td>
        <td><a href='{{url("/{$linha->id}/edit")}}'><i class="fa fa-pencil" style="padding: 5px; color: white; background-color: #4286f4;"></i></a> - <a href='{{url("/{$linha->id}/delete")}}'><i class="fa fa-trash" style="padding: 5px; color: white; background-color: red;"></i></a></td>
        </tr>
@endforeach
    </tbody>
  </table>

@endsection