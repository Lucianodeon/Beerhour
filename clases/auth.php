<?php


class Auth
{

  function __construct()
  {
    session_start();
  }

  public function loguearUsuario(){
    $_SESSION["email"] = $_POST["email"];
  }

  public function usuarioLogueado(){
    return isset($_SESSION["email"]);
  }
}?>
