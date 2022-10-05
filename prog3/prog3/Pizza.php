<?php
class Pizza{
    public $id;
    public $sabor;
    public $precio;
    public $tipo;
    public $cantidad;
    public function __construct($sabor,$precio,$tipo, $cantidad){
        $listaAux= Pizza::LeerArchivoJson("pizza.json");
        $this->id= count($listaAux)+1;
        $this->sabor=$sabor;
        $this->precio=intval($precio);
        $this->tipo=$tipo;
        $this->cantidad= intval($cantidad);
    }
   
    public static function SumarPizzasIguales($pizza, $otraPizza){
        $r=false;
        if($pizza->tipo==$otraPizza->tipo && $pizza->sabor==$otraPizza->sabor){
            $pizza->cantidad= $pizza->cantidad +  $otraPizza->cantidad;
            $pizza->precio=$otraPizza->precio;
            $r=true;
        }
        return $r;
    }

    public static function CrearArchivoJson($nombre,$datos){
        $datosFJson= Pizza::GetStringJsonArray($datos);
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
?>