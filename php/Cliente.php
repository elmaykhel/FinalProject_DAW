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

	public function deleteUser($username) {
		$this->query = "DELETE FROM Usuari WHERE username ='$username'";
		$this->execute_single_query($this->query);
	}

	public function informacionCliente($nombre, $apellidos) {
		$this->query = "SELECT * FROM Cliente WHERE nombre='$nombre' AND apellidos='$apellidos'";
		$this->get_results_from_query();

		$infoUsuario = array(
			"dni" => $this->rows[0]["dni"],
			"nombre" => $this->rows[0]["nombre"],
			"apellidos" => $this->rows[0]["apellidos"],
			"correo" =>  $this->rows[0]["correo"],
			"telefono" => $this->rows[0]["telefono"]
		);

		return json_encode($infoUsuario);
	}

	public function updateInformacionUsuario($username, $nombre, $apellido, $password) {
		$this->query = "UPDATE Usuari 
						SET nom='$nombre', cognom= '$apellido', password='$password' 
        				WHERE username='$username'";
		$exito = $this->execute_single_query($this->query);
		if ($exito){
			return "FAIL";
		} else{
			return "OK";
		}
	}

	public function mostrarTot() {
		$this->query = "SELECT * FROM  contactes;";
		$this->get_results_from_query();
		for ($i = 0; $i < count($this->rows); $i++) {
			echo "<br><br>";
			echo "Email: " . $this->rows[$i]["email"] . "<br>";
			echo "Nom: " . $this->rows[$i]["nom"] . "<br>";
			echo "1r Cognom: " . $this->rows[$i]["cognom1"] . "<br>";
			echo "2n Cognom: " . $this->rows[$i]["cognom2"] . "<br>";
			echo "Telefon: " . $this->rows[$i]["telefon"] . "<br>";
		}
	}

	public function select($userEmail = "") {
		if ($userEmail != "") {
			$this->query = "SELECT *
                    FROM contactes
                    WHERE email='$userEmail'";
			$this->get_results_from_query();
		}
	}

	public function insert($userData = array()) {
		/*CREO QUE HABRA DE CREAR LA FUNCION array_key_exists*/
		// echo "ESTO ES LA FUNCION INSERT";
		if (array_key_exists("email", $userData)) {
			$this->select($userData["email"]);
			if ($userData["email"] != $this->email) {
				foreach ($userData as $property => $value)
					$$property = $value;
				$this->query = "INSERT INTO contactes (email, nom, cognom1, cognom2, telefon)
					VALUES ('$email', '$nom', '$cognom1', '$cognom2', '$telefon')";
				$this->execute_single_query();
			}
		}
	}

	public function update($userData = array()) {
		foreach ($userData as $property => $value)
			$$property = $value;
		$this->query = "UPDATE contactes SET nom='$nom', cognom1= '$cognom1',
    cognom2 = '$cognom2', telefon = '$telefon' WHERE email='$email'";
		$this->execute_single_query($this->query);
	}

	public function delete($userEmail = "") {
		$this->query = "DELETE FROM contactes WHERE email ='$userEmail'";
		$this->execute_single_query($this->query);
		echo "<br>" . $userEmail . " ha sigut eliminat.";
	}
}

?>