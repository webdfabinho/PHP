<?php

    require_once "FormaPgto.php";
    require_once "Cesta.php";
    require_once "Parcela.php";

    $cesta = new Cesta() ;

    $fp = new FormaPgto( "- CRÉDITO - " , 3 ) ;

    $cesta->setFormaPgto(  $fp);

    $p1 = new Parcela( " # 1ª com vencimento em 30/03/2022 - atrasada -","30/03/2022", 20) ;
    $p2 = new Parcela( " # 2ª com vencimento em 30/04/2022","30/04/2022", 30) ;
    $p3 = new Parcela( " # 3ª com vencimento em 30/05/2022","30/05/2022", 40) ;

    $cesta->addParcelas( $p1 );
    $cesta->addParcelas( $p2 );
    $cesta->addParcelas( $p3 );
	
    echo "Checkout ".$cesta->getFormaPgto()."<br> <br>";

    foreach (  $cesta->getParcelas() as $parcela )
    {
        echo $parcela->getNumero()."<br> <br>" ;
	}
