<?php
include_once "./ej17.php";
    class Garaje{
        private $_razonSocial;
        private $_precioPorHora;
        public $_autos;
        public function __construct($razonSocial,$precioPorHora=100){
            $this->_razonSocial=$razonSocial;
            $this->_precioPorHora=$precioPorHora;
            $this->_autos=[];
        }
        public function MostrarGaraje(){
            echo "Razon Social: ". $this->_razonSocial ."</br>";
            echo "Precios Por Hora: ". $this->_precioPorHora ."</br>";
            foreach( $this->_autos as $auto){
                Auto::mostrarAuto($auto);
            }
        }
        public function Equals( $garaje, $auto){
            $r=false;
            foreach($garaje->_autos as $actual){
                if(Auto::EsElMismoAuto($actual,$auto)){
                    $r=true;
                    break;
                }
            }
            return $r;
        }
        public function Add($auto){
            $r=false;
            if(!$this->Equals($this,$auto)){
                $this->_autos[count($this->_autos)]=$auto;
                $r=true;
            } 
            return $r;
        }
        public function Remove($auto){
            $r=false;
            $i=0;
            foreach($this->_autos as $actual){

                if(Auto::EsElMismoAuto($actual,$auto)){
                    $r=true;
                    unset($this->_autos[$i]);
                    break;
                }
                $i++;
            }
            return $r;
        }
        public function EsJson(){
            echo json_encode($this->_autos);
            var_dump( json_encode($this->_autos));

        }
    }
   
    
?>