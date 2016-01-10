<?php
try{
$connection =new MongoClient( "mongodb://172.17.0.4" ); // connect to a remote host (default port: 27017)
}catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
