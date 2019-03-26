<?php
require_once 'conexao.class.php';
require_once '../Controller/login.php';

class Acesso{
	private $login;
	private $senha;

	public function checaBanco($login, $senha){
		$conexao = new Conexao();
		$controller = new Login();

		$this->setLogin($login);
		$this->setSenha($senha);

		$sql = "SELECT * FROM usuarios WHERE login = '{$this->getLogin()}' AND senha = '{$this->getSenha()}' ";
		$query = mysqli_query($conexao->conecta(), $sql);
		$num_rows = mysqli_num_rows($query);

		if($num_rows > 0){
			session_start();
			$_SESSION['login'] = $this->getLogin();
			$controller->painelAdmin();
		}else{
			$controller->senhaIncorreta();
		}
	}
	
	public function getLogin(){
		return $this->login;
	}
	public function setLogin($login){
		$this->login = $login;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
}
?>