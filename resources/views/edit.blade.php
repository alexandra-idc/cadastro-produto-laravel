@extends('includes.template')

@section('content')

<div id="container">
	<h2>Editar Cadastro</h2>
<div>
	<p style="color: red;">
		@php
		if(isset($errors) && count($errors) > 0){
				foreach($errors->all() as $linha){
				echo $linha."<br>";
			}
		}
		@endphp
		
	</p>
</div>
@if (Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
	<form method="get" action="{{url('update')}}">
		<input type="text" name="nome" placeholder="Nome do Produto" value="{{$pegaProduto->nome}}" maxlength="32" required="required">
		<select name="categoria" id="createProduto" style="padding: 1.8px;">
			@foreach ($categorias as $linha)
				<option value="{{$linha->nome}}">{{$linha->nome}}</option>
			@endforeach
		</select>

		<input type="hidden" name="id" value="{{$pegaProduto->id}}">
		<input type="submit" value="Enviar" class="btn btn-primary">
	</form>
</div>

@endsection

