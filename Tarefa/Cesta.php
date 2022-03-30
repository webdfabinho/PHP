<?php

class Cesta
{
    // atributos
    private  $nrCesta;
    private  $formaPgto;
    private  $parcelas;
    // métodos
    public function setFormaPgto( $fp )
    {
        $this->formaPgto = $fp ;
    }

    public function  getFormaPgto(){
        return  "Forma de Pagamento :".$this->formaPgto->getTipo()." Numero de Parcelas :".$this->formaPgto->getForma() ;
    }

    public function addParcelas( $p)
    {
        $this->parcelas[] = $p ;
    }
    public  function  getParcelas()
    {
       return $this->parcelas ;
    }

}