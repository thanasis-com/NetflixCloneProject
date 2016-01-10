<?php
try{
$connection = new MongoClient(); // connect to a remote host (default port: 27017)
}catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
