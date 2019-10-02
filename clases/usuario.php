<?php


class Usuario
{
  private $id;
  private $nombre;
  private $apellido;
  private $email;
  private $password;
  private $pais;
  private $provincia;
  private $genero;


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
    $this->apellido = $array["apellido"];
    $this->email = $array["email"];
    $this->pais = $array["pais"];
    $this->provincia = $array["provincia"];
    $this->genero = $array["genero"];

  }

  //Métodos
  public function getId(){
    return $this->id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }
  public function getPais(){
    return $this->pais;
  }
  public function getProvincia(){
    return $this->provincia;
  }
  public function getGenero(){
    return $this->genero;
  }
  
}
?>
