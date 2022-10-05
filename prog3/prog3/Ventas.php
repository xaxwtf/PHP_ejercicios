<?php
class Venta{
    public $id;
    public $nroPedido;
    public $mail;
    public $sabor;
    public $tipo;
    public $cantidad;
    public $fecha;
    private function __construct($mail,$sabor, $tipo, $cantidad){
        $myarrayAux=Venta::LeerArchivoJson("Ventas.json");
        $this->id=count($myarrayAux)+1;
        $this->nroPedido=rand(1, 10000);
        $this->mail=$mail;
        $this->sabor=$sabor;
        $this->tipo=$tipo;
        $this->cantidad= intval($cantidad);
        $this->fecha= date("d-m-Y");
    }
    public function ObtenerUsuario(){
        $resultado="";
        foreach($this->mail as $caracter){
            $resultado=$resultado . $caracter;
            if($caracter=='@'){
                break;   
            } 
        }
        return $resultado;
    }
    public static function CrearArchivoJson($nombre,$datos){
        $datosFJson= Venta::GetStringJsonArray($datos);
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
    public static function realizarVenta($mail,$sabor, $tipo, $cantidad){
        include_once './Pizza.php';
        $misPizzas=Pizza::LeerArchivoJson("Pizza.json");
        $misVentas=Venta::LeerArchivoJson("Ventas.Json");
        foreach($misPizzas as $pizza){
            if($pizza->tipo==$tipo && $pizza->sabor==$sabor){
                $pizza->cantidad=$pizza->cantidad-$cantidad;
                $nuevo=new Venta($mail,$sabor,$tipo,$cantidad);
                $misVentas[count($misVentas)]=$nuevo;
                $destino = "./ImagenesDeLaVenta/". $nuevo->ObtenerUsuario() . pathinfo($_FILES["imagen"],PATHINFO_EXTENSION);
                echo $destino;
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino);
                var_dump($_FILES["imagen"]['name']);
                Pizza::CrearArchivoJson("Pizza.json",$misPizzas);
                break;
            }
        }
        if(count($misVentas)>0){
            Venta::CrearArchivoJson("Ventas.json",$misVentas);
        }
        
    }
}
?>