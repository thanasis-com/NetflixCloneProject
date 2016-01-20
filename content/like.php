<?php

$id = $_POST['id'];

$connection = new Mongo("mongodb://172.17.0.3");
$db = $connection->CATALOGUE;
$collection = $db->movies;

$criteria = array("_id"=>$id);
$newdata = array('$inc'=>array("likes"=>1));

$collection->update(
            $criteria,
            $newdata,
            array('multiple'=>true, 'safe'=>true)
          );
}
?>
