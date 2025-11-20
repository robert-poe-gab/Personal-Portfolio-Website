<?php

// --------- Emeset --------- 
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/Container.php";

// --------- Controllers ---------
include "../src/controllers/ctrlMain.php";

// --------- Config ---------
$config = [];

$container = new \Container($config);
$request = $container->request();
$response = $container->response();

// --------- Routes ---------
$r = '';
if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
}

if($r === "") {
    $response = ctrlMain($request, $response, $container);
}
elseif($r === "index") {
    $response = ctrlIndex($request, $response, $container);
}
else {
    $response->ctrl404($request, $response, $container);
}

$response->response();
