<?php
require_once '../Model/acesso.class.php';

class Login{
	public function validaLogin($login, $senha){
		$conexao = new Conexao();
		$acesso = new Acesso();

		if(empty($login) OR empty($senha)){
			print 'Campo login ou senha vazio.';
		}elseif(!preg_match('/^[a-z A-Z0-9]+$/', $login)){
			print 'Campo login não pode ter caracteres especiais.';
		}elseif(strlen($login) <= 4 || strlen($login) >= 26){
			print 'Campo login tem menos de 5 dígitos ou + de 26.';
		}else{
			$login = mysqli_real_escape_string($conexao->conecta(), $login);
			$senha = mysqli_real_escape_string($conexao->conecta(), $senha);

			$senha = md5($senha);
			$acesso->checaBanco($login, $senha);
		}
	}

	public function painelAdmin(){
		header("Location: ../View/admin.php");
	}
	public function senhaIncorreta(){
		print 'Login ou senha Incorreto.';
	}
}

?>