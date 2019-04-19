<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gerenciamento de Produtos & Categorias - GerenciaNet</title>
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Fonts e Estilos -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fim -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow-x: hidden;
            }

            #interface{
                width: 1350px;
                margin: auto auto auto auto;
                color: #CFD1CF;
                background-repeat: repeat-x;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #4286f4;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            a:hover{
            	color: #636b6f;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer p{
                font-weight: bold;
                color: #212321;
            }
            .final{
                border-style: solid;
                border-width: 1px;
                border-top: solid;
                border-left: none;
                border-right: none;
                border-bottom: none;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="interface">
            <div class="content">
                <div class="links">
                    <a href="{{url('index')}}">Início</a>
                    <a href="{{url('gerenciar-produto')}}">Gerenciar Produtos</a>
                    <a href="{{url('gerenciar-categoria')}}">Gerenciar Categorias</a>
                    <a href="{{url('sobre')}}">Sobre</a>
                </div>

                <br>
                <div class="inicio">
                	<h1>GERENCIA NET</h1>
                	<small style="font-weight: bold;">Cadastro e Gerenciamento de Produtos</small>
                </div>
                <br>
                <div class="intro">
                	<img src="img/home.png" class="img1">
                	<p>
                		A GerenciaNet é uma Empresa focada no ramo de Gerenciamento de Produtos e Serviços na Internet.
                	</p>
                	<p>
                		Online desde 2009, a empresa possuí mais de 10 anos online no Mercado. Com uma vasta experiência no ramo, possuí os produtos mais procurados do mercado.
                	</p>
                	<p>
                		Todos os produtos adicionados estão altamente seguros conosco. Nosso sistema conta com uma proteção de ponta, onde mantém todas as informações seguras e com uma proteção contínua e permanente.
                	</p>
                </div>

                <div class="demostracao">
                	<div class="novidade">
                		<i class="fa fa-plus-square-o" style="font-size:128px;color:#4286f4"></i>
                		<p>
                			Cadastre seu Produto
                		</p>
                	</div>
                	<div class="novidade">
                		<i class="fa fa-edit" style="font-size:128px;color:#4286f4"></i>
                		<p>
                			Liste, Edite e Delete seus Produtos
                		</p>
                	</div>
                	<div class="novidade">
                		<i class="fa fa-plus-square-o" style="font-size:128px;color:#4286f4"></i>
                		<p>
                			Cadastre sua Categoria
                		</p>
                	</div>
                	<div class="novidade">
                		<i class="fa fa-edit" style="font-size:128px;color:#4286f4"></i>
                		<p>
                			Liste, Edite e Delete suas Categorias
                		</p>
                	</div>
                </div>
            </div>
            <div class="final">
	            <footer>
			            <p>
			            	Copyright - Todos direitos reservados à GerenciaNet.
			            </p>
	     		</footer>
     		</div>
        </div>
    </body>
</html>
