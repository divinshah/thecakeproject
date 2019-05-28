<?php
require_once 'database.php';
require_once 'cakes.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];

    $dbcon = Database::getDb();
    $b = new Cakes();
	$count =$b->deleteCake($id, $dbcon);
	
	if($count){
		header("location: addcake.php");
	}
	else {
		echo "error";
	}
}