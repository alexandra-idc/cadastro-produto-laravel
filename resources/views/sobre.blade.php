<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gerenciamento de Produtos & Categorias - GerenciaNet</title>
        <link rel="shortcut icon" href="img/favicon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <a href="{{url('index')}}">Início</a>
                    <a href="{{url('gerenciar-produto')}}">Gerenciar Produtos</a>
                    <a href="{{url('gerenciar-categoria')}}">Gerenciar Categorias</a>
                    <a href="{{url('sobre')}}">Sobre</a>
                </div>

                @yield('content')

                <br>
                <div class="inicio">
                	<h2>SOBRE</h2>
                	<small>Sobre a GerenciaNet</small>
                </div>
                <br>
                <div class="sobre">
                    <p>
                        <strong>
                            QUEM SOMOS
                        </strong>
                        <br>
                        A GerenciaNet é uma empresa especializada no ramo de cadastro de produtos. Está em operação desde 2009, e possuí uma vasta experiência no mercado.
                    </p> 
                    <p>
                        <strong>
                            SERVIÇOS
                        </strong>
                        <br>
                        Os serviços prestados pela GerenciaNet são Cadastro de Produtos em Geral; onde todos esse serviço está disponível a todos os clientes da empresa.   
                    </p> 
                    <p>
                        <strong>
                            DESENVOLVIDO
                        </strong>
                        <br>
                        Desenvolvido por <a href="http://www.matheus.cafe">Matheus Henrique</a>.
                        <br>
                        Contato (67)9 8156-9048<br>
                        contato@matheus.cafe<br>
                        <a href="https://github.com/MatheusHenriqueF/">github/matheushfl</a>
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
                <div id="map">
                    <p>Nosso endereço</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7320.935289164089!2d-51.919670528457374!3d-23.443590299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a413a9c9463%3A0x4e3ee356ad1bd6c3!2sUniCesumar+-+Maring%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1555604747752!5m2!1spt-BR!2sbr" width="1200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
