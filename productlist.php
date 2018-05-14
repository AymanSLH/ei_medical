<?php

require_once "nusoap.php" ;

    function getProd($category)
    {
        if ($category == "books")
        { return join("," , array(
            "Worpress anthology " ,
            "Php Master "
        ));}

        else {
            return "No Products are Listed !" ;
        }
    }

$server  = new soap_server() ;
$server->register("getProd") ;
$server->service($HTTP_RAW_POST_DATA) ;


