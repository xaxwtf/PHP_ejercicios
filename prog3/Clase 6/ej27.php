<?php
class Usuario{
    public $nombre;
    public $apellido;
    public $clave;
    public $mail;
    public $localidad;
    public function __construct($nombre , $apellido ,$clave ,$mail, $localidad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->clave=$clave;
        $this->mail=$mail;
        $this->localidad=$localidad;
    }
    public function CrearUsuarioenDB(){
        try {

            $conStr = "mysql:host=localhost; dbname=utn_test";
            $pdo = new PDO($conStr, "root", "");

            $sentencia = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, clave, mail, localidad)   VALUES (:nombre, :apellido, :clave, :mail, :localidad)');
            $sentencia->bindValue(':nombre', $this->nombre, PDO::PARAM_STR);
            $sentencia->bindValue(':apellido', $this->apellido, PDO::PARAM_STR);
            $sentencia->bindValue(':clave', $this->clave, PDO::PARAM_STR);
            $sentencia->bindValue(':mail', $this->mail, PDO::PARAM_STR);
            $sentencia->bindValue(':localidad', $this->localidad, PDO::PARAM_STR);

            $sentencia->execute();
            
            }
            catch(PDOException $e){
            
            echo "Error: " .$e->getMessage();
            
            }

    }
}
$primerUsuario= new Usuario($_POST["nombre"],$_POST["apellido"],$_POST["clave"], $_POST["mail"], $_POST["localidad"]);
$primerUsuario->CrearUsuarioenDB();

?>