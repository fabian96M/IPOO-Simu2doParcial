<?php
class MotoDeImportacion extends Moto{
    /* atributos */
    private $paisDeImportacion;
    private $importeDeImportacion;
    private $impuestos;

    /* metodo construct */
    public function __construct($codigo, $costo, $anioDeFabricacion, $descripcion, $porcIncAnual, $activa, $paisDeImportacion, $importeDeImportacion, $impuestos)
    {
        parent::__construct($codigo, $costo, $anioDeFabricacion, $descripcion, $porcIncAnual, $activa);
        $this->paisDeImportacion = $paisDeImportacion;
        $this->importeDeImportacion = $importeDeImportacion;
        $this->impuestos = $impuestos;
    }
    /* Metodos setters */
    public function setPaisDeImportacion($paisDeImportacion){
        $this->paisDeImportacion = $paisDeImportacion;
    }
    public function setImporteDeImportacion($importeDeImportacion){
        $this->importeDeImportacion = $importeDeImportacion;
    }
    public function setImpuestos($impuestos){
        $this->impuestos = $impuestos;
    }


    /* metodos getters */
    public function getPaisDeImportacion(){
        return $this->paisDeImportacion;
    }
    public function getImporteDeImportacion(){
        return $this->importeDeImportacion;
    }
    public function getImpuestos(){
        return $this->impuestos;
    }

     /* Metodo darPrecioVenta */
     public function PrecioVenta()
     {
         $precioBase = parent::darPrecioVenta();
         $precioFinal = $precioBase + $this->getImporteDeImportacion();
         return $precioFinal;
     }
    /* Metodo ToString */
    public function __toString()
    {
        $datosMoto = parent::__toString();
        return "\n".$datosMoto." Pais de importacion: ".$this->getPaisDeImportacion()."\n Importe de importacion: ".$this->getImporteDeImportacion()."\n Impuestos por importacion ".$this->getImpuestos()."\n";
    }


}