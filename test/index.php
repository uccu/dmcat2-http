<?php

// echo phpinfo();


require_once('../vendor/autoload.php');

use Uccu\Dmcat2Http\Request;

// $request = new Request;

// echo $request->getProtocolVersion();


// echo json_encode($_SERVER);
// http_response_code(400);
// echo http_response_code();
// echo http_res

header_remove('X-Powered-By');

echo json_encode(headers_list());