<?php

function ctrlMain($request, $response, $container){
    $response->setTemplate("main.php");

    return $response;
    
}