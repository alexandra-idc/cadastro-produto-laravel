<?php
class Conexao{
	public function conecta(){
		$conn = mysqli_connect("localhost", "root", "root", "formulariopoo");
		if(mysqli_connect_errno($conn)){
			echo "Error: ".mysqli_connect_errno();
			exit;
		}else{
			return $conn;
		}
	}
}
?>