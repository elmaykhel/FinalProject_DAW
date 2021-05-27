<?php
session_start();
require_once('DBAbstractModel.php');

class Cliente extends DBAbstractModel {
	
	private $dni;
	private $nombre;
	private $apellidos;
	private $correo;
	private $telefono;

	function __construct() {
		$this->db_name = "a16miqboipos_fin";
	}

	function __toString() {
		return "DNI: " . $this->dni . "Nombre: " . $this->nombre . ", Apellidos: " . $this->apellidos . ", Correo " .
			$this->correo . ", Telefono:" . $this->telefono .  ")";
	}

	function __destruct() {
		// unset ($this);
	}

	public function informacionCliente($nombre, $apellidos) {
		$this->query = "SELECT * FROM Cliente WHERE nombre='$nombre' AND apellidos='$apellidos'";
		$this->get_results_from_query();

		$infoCliente = array(
			"dni" => $this->rows[0]["dni"],
			"nombre" => $this->rows[0]["nombre"],
			"apellidos" => $this->rows[0]["apellidos"],
			"correo" =>  $this->rows[0]["correo"],
			"telefono" => $this->rows[0]["telefono"]
		);

		return json_encode($infoCliente);
	}

	public function nuevoCliente($nombre, $apellidos, $dni, $correo, $telefono) {
		$this->query = "INSERT INTO Cliente (dni, nombre, apellidos, correo, telefono) VALUES ('$dni', '$nombre', '$apellidos', '$correo', '$telefono')";
		$this->execute_single_query($this->query);
	}
}
?>