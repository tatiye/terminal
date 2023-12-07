<?php
error_reporting(0);
use app\tatiye;
use app\tatiyeNetAuthorization AS Authorization;
use terminal\init;
 $data=json_decode(file_get_contents("php://input"));
 $response=init::sdk($data);
  // Authorization::init(1);
if($_SERVER["REQUEST_METHOD"] === "POST") {
 http_response_code(200);
  echo json_encode($response);
} else {
  return tatiye::index();
}
