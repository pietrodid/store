<?php 
require_once("Libraries/Core/Mysql.php");
trait TTipopago{
	private $con;

	public function getTiposPagoT(){
		$this->con = new Mysql();
		$sql = "SELECT * FROM tipopago WHERE status != 0";
		$request = $this->con->select_all($sql);
		return $request;
	}
}

 ?>