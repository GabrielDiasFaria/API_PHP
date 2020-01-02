<?php
include '../conexao/connection.php';
class Cliente extends Conexao{
	  private $idCliente;
    private $nomeEmpresa;
    private $nomeDiretor;
    private $numEmpregados;
  
    function getID() {
        return $this->idCliente;
    }
    function getNomeEmpresa() {
        return $this->nomeEmpresa;
    }
    function getNomeDiretor() {
        return $this->nomeDiretor;
    }
    function getNumEmpregados() {
        return $this->numEmpregados;
    }
  
    function setID($idCliente) {
        $this->idCliente = $idCliente;
    }
    function setNomeEmpresa($nomeEmpresa) {
        $this->nomeEmpresa = $nomeEmpresa;
    }
    function setNomeDiretor($nomeDiretor) {
        $this->nomeDiretor = $nomeDiretor;
    }
    function setNumEmpregados($numEmpregados) {
        $this->numEmpregados = $numEmpregados;
    }
  
    public function insert($obj){
      $sql = "INSERT INTO `clientes` (`idCliente`,`nomeEmpresa`,`nomeDiretor`,`numEmpregados`) VALUES (:idCliente,:nomeEmpresa,:nomeDiretor,:numEmpregados);";
    	//$sql = "INSERT INTO conteudo(titulo,descricao,horario,curso_id,periodo_id,disciplina_id) VALUES (:titulo,:descricao,:horario,:curso_id,:periodo_id,:disciplina_id)";
    	$consulta = Conexao::prepare($sql);
      $consulta->bindValue('idCliente',  $obj->idCliente);
      $consulta->bindValue('nomeEmpresa', $obj->nomeEmpresa);
      $consulta->bindValue('nomeDiretor' , $obj->nomeDiretor);
      $consulta->bindValue('numEmpregados' , $obj->numEmpregados);
    	return $consulta->execute();
	}
	public function update($obj,$idCliente = null){
		$sql = "UPDATE clientes SET nomeEmpresa = :nomeEmpresa, nomeDiretor = :nomeDiretor, numEmpregados = :numEmpregados WHERE idCliente = :idCliente; ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nomeEmpresa', $obj->nomeEmpresa);
		$consulta->bindValue('nomeDiretor', $obj->nomeDiretor);
		$consulta->bindValue('numEmpregados' , $obj->numEmpregados);
		$consulta->bindValue('idCliente', $obj->idCliente);
		return $consulta->execute();
	}
	public function delete($obj,$idCliente = null){
		$sql =  "DELETE FROM clientes WHERE idCliente = :idCliente;";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('idCliente',$idCliente);
		$consulta->execute();
	}
	public function find($idCliente = null){
	}
	public function findAll(){
		$sql = "SELECT * FROM clientes;";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>