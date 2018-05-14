<?php
/**
 * Created by PhpStorm.
 * User: dennis-ritchie
 * Date: 5/13/18
 * Time: 8:27 AM
 */
require_once "nusoap.php" ;

$client =  new nusoap_client("http://localhost:63342/ServeIT
productlist.php") ;

$error  = $client->getError() ;
if ($error){
    echo "There is error " ;

}


