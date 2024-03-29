<?php

/**
 *
 */


class DbJson extends Db
{
  //Atributos
  private $json;

  //Constructor
  function __construct(string $file)
  {
    if(!file_exists($file)){
      $data = ['usuarios'=>[]]; // En caso de que el archivo no exista vamos a encodear al formato incial del .json para que no rompa el login.
      $this->json = json_encode($data);
    } else {
      $this->json = file_get_contents($file);
    }

  }

  //Métodos
  public function guardarUsuario(Usuario $user, string $file = null){
    $array = json_decode($this->json, true);
    //Pasar el usuario de Objeto a Array.
    $usuario = [
      "id" => $user->getId(),
      "nombre" => $user->getNombre(),
      "apellido" => $user->getApellido(),
      "email" => $user->getEmail(),
      "password" =>$user->getPassword(),
      "pais" =>$user->getPais(),
      "provincia" =>$user->getProvincia(),
      "genero" =>$user->getGenero(),
    ];

    $array["usuarios"][] = $usuario;

    $json = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
  }

  function buscarUsuarioPorMail(string $email){
    $array = json_decode($this->json, true);

    foreach ($array["usuarios"] as $usuario) {
      if($usuario["email"] == $email){
        $user = new Usuario($usuario);
        // var_dump($user);
        // exit;
        return $user; //Debería retornar un Objeto de tipo Usuario.
      }
    }
    return null;
  }

  function nextId(){
    $array = json_decode($this->json, true);

    $lastUser = array_pop($array["usuarios"]);

    $nextId = $lastUser["id"] + 1;

    return $nextId;

  }






}
