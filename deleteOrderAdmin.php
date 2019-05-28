<?php
require_once 'Database.php';
require_once 'Order.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    $dbcon = Database::getDb();
    $o = new Order();
    $count = $o->deleteOrder($id, $dbcon);
    
    if($count){
        header("Location: listOrdersAdmin.php");
    }
    else {
        echo " problem deleting";
    }

}

?>