<?php
/**
 *
 */
class Validador
{

  public static function validarRegistro($datos){
    global $json;

    $errores = [];

    $datosFinales = [];

    // Limpia espacios al cominenzo y la final de cada campo.
    foreach ($datos as $key => $value) {
      //¿Cuándo no debe trimear?
      $datosFinales[$key] = trim($value);
    }

    //Validaciones
    //=====================

    //Nombre
    if(strlen($datosFinales["nombre"]) == 0){
      $errores["nombre"] = "El campo nombre debe estar completo";
    } else if (!ctype_alpha($datosFinales["nombre"])){
      $errores["nombre"] = "Por favor ingrese caracteres alfabéticos";
    } //Validar con expresion regular que permita espacios intermedios.

    //Email
    if(strlen($datosFinales["email"]) == 0){
      $errores["email"] = "El campo email debe estar completo";
    } else if(!filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)){
      $errores["email"] = "Por favor ingrese un email con formato válido";
    } else if($json->buscarUsuarioPorMail($datosFinales["email"])) {
      $errores["email"] = "El email ya existe. Por favor elija otro.";
    }

    //Password
    if(strlen($datosFinales["password"]) < 4){
      $errores["password"] = "La contraseña debe tener al menos 4 caracteres";
    }

    //retype Password
    if(strlen($datosFinales["repass"]) === 0){
      $errores["repass"] = "El campo no puede estar vacío.";
    } else if($datosFinales["password"] !== $datosFinales["repass"]){
      $errores["repass"] = "Las contraseñas no coiniceden";
    }

    return $errores;
  }

  public static function validarLogin($datos){
    global $json;
    $errores = [];

    //Email
    if(strlen($datos["email"]) == 0){
      $errores["email"] = "El campo email debe estar completo";
    } else if(!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)){
      $errores["email"] = "Por favor ingrese un email con formato válido";
    } else if(!$json->buscarUsuarioPorMail($datos["email"])) {
      $errores["email"] = "El usuario no existe Por favor regístrese.";
    }

    //Password
    if(strlen($datos["password"]) == 0){
      $errores["password"] = "El campo password debe estar completo";
    } else {
      $usuario = $json->buscarUsuarioPorMail($datos["email"]);
      if( !password_verify($datos["password"], $usuario->getPassword()) ){
      $errores["password"] = "La contraseña ingresada es incorrecta";
      }
    }

    return $errores;
  }
}
