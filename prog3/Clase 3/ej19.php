<?php
class Auto {

    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;
    public function __construct( string $color, string $marca,  $precio = 100000, $fecha = "NO ASIGNADO") {
        $this->_color=$color;
        $this->_precio=$precio;
        $this->_marca=$marca;
        $this->_fecha=$fecha;
    }
    public function AgregarImpuestos($imp1=0, $imp2=0){
        $this->_precio=$this->_precio+$imp1+$imp2;
    }
    public static function MostrarAuto($auto){
        echo "" . $auto->_color .",". $auto->_precio .",". $auto->_marca .",". $auto->_fecha ."</br>";
    }
    public function Equals($a, $b){
        $r=false;
        if($a->_marca == $b->_marca){
            $r=true;
        }
        return $r;
    }
    public  static function EsElMismoAuto($a , $b){
        $r=false;
        if($a->_marca == $b->_marca &&  $a->_color == $b->_color &&  $a->_precio == $b->_precio &&  $a->_fecha == $b->_fecha){
            $r=true;
        }
        return $r;
    }
    public static function Add($a, $b){
        $precioTotal=0;
        if($a->_marca==$b->_marca && $a->_color==$b->_color){
            $precioTotal=$a->_precio+$b->_precio;
            
        }
        
        return $precioTotal;
    }
    public static function VolcarAutosEnArchivo($lista,$name){
        $archivo=fopen($name,"w");
        foreach($lista as $auto){
            echo fwrite($archivo, json_encode($auto));
        }
        fclose($archivo);
    }

}
$hoy=date('m-d-Y h:i:s a', time());
$primero= new Auto("blanco","toyota");
$segundo= new Auto("negro","toyota");
$tercero= new Auto("azul","ferrari",200000);
$cuarto= new Auto("amarillo","ferrari",300000);
$quinto= new Auto("blanco","toyota",500000,$hoy);

$quinto->AgregarImpuestos(1500);
$cuarto->AgregarImpuestos(1500);
$tercero->AgregarImpuestos(1500);
echo "TEST MOSTRAR AUTO </br>";
 Auto::MostrarAuto($primero); 
 Auto::MostrarAuto($segundo);
echo "</br></br>  TEST  DEL EQUALS </br>";
var_dump( $primero->Equals($primero,$segundo));
echo "</br> </br> TEST DE ADD </br> resultado:";
$resultado=Auto::Add($primero,$segundo);
echo $resultado;
echo "</br>  fin de test </br>";

echo "suma de primero + segundo: ". Auto::Add($primero,$segundo);

echo " </br>el primero, segundo y tercero ";

if($primero->Equals($primero,$segundo)&& $segundo->Equals($segundo,$tercero)&&$tercero->Equals($primero,$tercero)){
    echo "son iguales";
}
else{
    echo "no son iguales";
}

Auto::VolcarAutosEnArchivo()
?>
