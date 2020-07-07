<?php

 class Geral extends mysqli {

	public $host;
	public $db;
	public $login;
	public $senha;
	private $result = array();


	public function __construct() {
		
		$this->host = "127.0.0.1:3306";
		$this->db = "mydb";
		$this->login = "root";
		$this->senha = "";
		
		if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
	}
	
	
	public function select($f){
		$pesquisar = $f;
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$dbname = "mydb";
		//Criar a conexao
		$link2 = mysqli_connect($servidor, $usuario, $senha, $dbname);
		$query2 = "SELECT * FROM treino WHERE nomeAluno LIKE '%$pesquisar%' LIMIT 5";
		$result2 = mysqli_query($link2,$query2) or die(mysqli_error($link2));
		while($recebeDado2 = mysqli_fetch_row($result2)){
			if($recebeDado2 != null){
				 $dados2[] = $recebeDado2;
			}
		}
		foreach($dados2 as $registra){ 
			if($registra != null){
				print("<tr>");
					for($i=0;$i<count($registra);$i++){
						print("<td>".$registra[$i]."</td>");
					}
				print("</tr>");	
			}
		}
    }
	
	public function select2($f){
		$pesquisar = $f;
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$dbname = "mydb";
		//Criar a conexao
		$link3 = mysqli_connect($servidor, $usuario, $senha, $dbname);
		$query3 = "SELECT s.idserioe,s.nome,s.exercicio,s.tempoTotal,s.tempoParcial,s.tempoMedio,s.tempoMinimo,s.Repeticoes,s.treino_idtreino FROM serie AS s INNER JOIN treino AS t ON (t.nomeAluno = '".$pesquisar."') = s.idserioe LIMIT 5";
				   
		$result3 = mysqli_query($link3,$query3) or die(mysqli_error($link3));
		while($recebeDado3 = mysqli_fetch_row($result3)){
			if($recebeDado3 != null){
				 $dados3[] = $recebeDado3;
			}
		}
		foreach($dados3 as $registra1){ 
			if($registra1 != null){
				print("<tr>");
					for($i=0;$i<count($registra1);$i++){
						print("<td>".$registra1[$i]."</td>");
					}
				print("</tr>");	
			}
		}
    }
	
	

	//Retorna login
	private function getLogin(){
		return $this->login;
	}
	
	//Atribui Login
	private function setLogin($l){
		$this->login = $l;
	}
	
	//Retorna login
	private function getSenha(){
		return $this->senha;
	}
	
	//Atribui Login
	private function setSenha($se){
		$this->senha = $se;
	}
	
	//Retorna host
	private function getHost(){
		return $this->host;
	}
	
	//Atribui Login
	private function setHost($l){
		$this->host = $l;
	}
	
	//Retorna Db
	private function getDb(){
		return $this->db;
	}
	
	//Atribui Login
	private function setDb($l){
		$this->db = $l;
	}
	
}

?>