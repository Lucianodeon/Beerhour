<?php

class dbMysql extends db
{
  private $db;

  function __construct(argument)
  {  $dsn='mysql;host=localhost;dbname=movies_db;3306';
      $username='root';
      $password='root';
      try {
        $db = new PDO($dsn, $user, $pass); //Resuelve la conexión.
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

      } catch (\Exception $e) {
          echo "Hubo en error. Mensaje: ";
          var_dump($e->getMessage());
          $db = null;
      }

  }
  public function guardarUsuario(Usuario $usuario,string $file=null){
    $stmt=$this->$db->prepare("INSERT INTO usuarios VALUES(DEFAULT,:nombre,:apellido,:email,:password,:pais,:provincia,:genero,:nac)");
    $stmt=->bindValue(":nombre",$user->getNombre());
    $stmt=->bindValue(":apellido",$user->getApellido());
    $stmt=->bindValue(":email",$user->getEmail());
    $stmt=->bindValue(":pais",$user->getPais());
    $stmt=->bindValue(":provincia",$user->getProvincia());
    $stmt=->bindValue(":provincia",$user->getGenero());
    $stmt->execute();

  }
  public function buscarUsuarioPorMail(string $email){

  }
}
 ?>
