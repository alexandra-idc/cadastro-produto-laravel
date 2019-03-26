<?php
require_once 'login.php';

if(isset($_POST['submit'])){
	$envia = new Login();
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$envia->validaLogin($login, $senha);
}
?>
