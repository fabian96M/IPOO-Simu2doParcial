<?php
class MotoDeFabNacional extends Moto{
    /* atributos */
    private $porcDescuento;

    /* metodo construct */
    public function __construct($codigo, $costo, $anioDeFabricacion, $descripcion, $porcIncAnual, $activa, $porcDescuento)
    {
        parent::__construct($codigo, $costo, $anioDeFabricacion, $descripcion, $porcIncAnual, $activa);
        $this->porcDescuento = $porcDescuento;
        
    }
    /* Metodos setters */
    public function setPorcDescuento($porcDescuento){
        $this->porcDescuento = $porcDescuento;
    }
    /* metodos getters */
    public function getPorcDescuento(){
       return $this->porcDescuento;
    }
    /* Metodo darPrecioVenta */
    public function PrecioVenta()
    {
        $precioBase = parent::darPrecioVenta();
        $descuento = $precioBase * $this->getPorcDescuento() / 100;
        $precioFinal = $precioBase - $descuento;
        return $precioFinal;
    }

    /* Metodo ToString */
    public function __toString()
    {
        $datosMoto = parent::__toString();
        return "\n".$datosMoto." Porcentaje de descuento: ".$this->getPorcDescuento()."\n";
    }


}