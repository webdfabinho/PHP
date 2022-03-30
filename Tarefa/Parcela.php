<?php

class Parcela
{
    // atributos
    private  $numero ;
    private  $dataVencimento ;
    private  $valor;

    // métodos
    public function __Construct( $nr , $dt, $vl )
    {
        $this->numero         = $nr ;
        $this->dataVencimento = $dt ;
        $this->valor          = $vl ;
    }

    public function  getNumero()
    {
        return $this->numero ;
    }
	public function getValor()
	{
		return $this->valor;
	}
	
}