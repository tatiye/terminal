<?php
  use app\tatiye;
  $storage=json_decode($_POST['key'], true);
  var_dump($storage);
  echo tatiye::tabelRaw(tatiye::licenced(),0);