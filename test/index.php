<?php

// echo phpinfo();


require_once('../vendor/autoload.php');

use Uccu\Dmcat2Http\Request;

// $request = new Request;

// echo $request->getProtocolVersion();


echo json_encode(getallheaders());