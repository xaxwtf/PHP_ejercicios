<?php
class Usuario{
    public $id;
    public $nombre;
    public $clave;
    public $mail;
    public function __construct($nombre,$clave,$mail){
        $this->id=rand(1, 10000);
        $this->nombre=$nombre;
        $this->clave=$clave;
        $this->mail=$mail;
    }
    public function GetStringJson(){
        return '{
            "id":'. $this->id.',
            "nombre":'.$this->nombre.',
            "clave":"'. $this->clave.'",
            "mail":"'. $this->mail.'"
         }';
    }
    public static function CrearArchivoJson($nombre,$datos){
        $datosFJson= Usuario::GetStringJsonArray($datos);
        echo $datosFJson;
        $archivo = fopen($nombre,"w");
        echo fwrite($archivo,$datosFJson);
        fclose($archivo);
    }
    public static function LeerArchivoJson($nombre){
        $r=[];
        try{
            $archivo = fopen($nombre,"r");
            if($archivo){
                $formatoJson = fread($archivo, filesize($nombre));
                
                $r=json_decode($formatoJson);
                fclose($archivo);
            }
            
        }
        catch(e){
        }
        return $r;
    }
    public static function GetStringJsonArray($lista){
        $myArrayJson="[ \r\n";
        $i=0;
        foreach( $lista as $auto){
            $aux= json_encode($auto);
            if($i==0){
                $myArrayJson=$myArrayJson . $aux ;
                $i++;
            }   
            else{
                $myArrayJson=$myArrayJson .",\r\n". $aux ;
            }
            
        }
        $myArrayJson=$myArrayJson ."\r\n]";
        return $myArrayJson;
    }
}
$myLista= Usuario::LeerArchivoJson(date("d-m-Y").".json");
$nuevo= new Usuario($_POST["nombre"],$_POST["clave"],$_POST["mail"]);
$myLista[count($myLista)]=$nuevo;
Usuario::CrearArchivoJson(date("d-m-Y").".json",$myLista);

    
?>