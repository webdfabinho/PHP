<?php

class FormaPgto
{
    // atributos
    private  $tipo ;
    private  $forma ;

    // métodos
    public function __Construct( $t , $f )
    {
        $this->tipo  = $t ;
        $this->forma = $f;
    }

    public function  getTipo(){
        return  $this->tipo ;
    }

    public function  getForma(){
        return  $this->forma ;
    }

}