<?php

require_once('DBAbstractModel.php');

class Empleado extends DBAbstractModel {
  private $username;
  private $password;
  private $id;
  
  function __construct() {
    $this->db_name = "a16miqboipos_fin";
  }
  
  function __toString() {
    echo "entro string <br>";
    return "(". $this->email . ", " . $this->password . ")";
  }
  
  function __destruct() {
    unset ($this);
  }
  
  public function select($username, $password) {
    if ($username!="") {
      $this->query = "SELECT id, usuario, contraseña FROM Empleado WHERE usuario='$username' AND contraseña='$password'";
      $this->get_results_from_query();
    }
}

public function doLogin($username, $password) {
		
  $this->query = "SELECT id, usuario, contraseña FROM Empleado WHERE username='$username' AND contraseña='$password'";
  $this->get_results_from_query();


  if (count($this->rows) == 1) {
    $response = array('status' => 'OK', 'username' => $this->rows[0]["username"], 'password' => $this->rows[0]["password"]);
    $_SESSION['username']=$this->rows[0]["username"];
    $_SESSION['password']=$this->rows[0]["password"];
    return json_encode($response);
  } else {
    return json_encode(array('status' => 'FAIL'));
  }
}
}
?>