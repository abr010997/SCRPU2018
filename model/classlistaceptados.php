<?php 
require_once 'conexion.php';

class classlistaceptados extends Conexion
{
	private $PU04IDTRA;
	private $PU04FETRA;
	private $PU04ESTADO;
	private $conexion;

	function __construct()
	{
		$this->conexion = new Conexion();
	}
	
	public function listar()
	{
		$sql = "CALL SP00_LISTAR_TRAMITE_ACEPTADO();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}


}
 ?>