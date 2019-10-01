<?php


class Usuario
{ 
  private $id;
  private $nombre;
  private $email;
  private $password;

  //Constructor
  function __construct(Array $array)
  {
    // 2 Origenes: 1ra es desde el formulario de registro. 2da
    global $json; //Tremos la instancia de base de datos para poder usarla. Otra opción es pasarla por parámetro.
    if(isset($array["id"])){
      $this->id = $array["id"];
      $this->password = $array["password"];
    } else {
      $this->id = $json->nextId(); //nextID();
      $this->password = password_hash($array["password"], PASSWORD_DEFAULT);
    }
    $this->nombre = $array["nombre"];
    $this->email = $array["email"];


  }

  //Métodos
  public function getId(){
    return $this->id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }



}
?>
