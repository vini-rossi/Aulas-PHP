<?php
class bd{
	private $host;
	private $usuario;
	private $senha;
	private $banco;

	public function __construct (string $host, string $usuario, string $senha, string $banco) {
		if(empty($host) || empty($usuario) || empty($banco)) {
			die('Paramentro de banco de dados invalido');
		}

		$this->host = $host;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->banco = $banco;
		
	}
	public function conectar() {
		$this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco) or die ('Erro ao conectar no banco de dados: '.mysqli_connect_error());
		return $this->conexao;
	}
}
