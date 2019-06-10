<?php

class Order{

    //to get list of Orders
    public function getAllOrders($dbcon)
    {
       
        //$dbcon = Database::getDb(); 
        
        $sql = "SELECT * FROM order";  

        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute 

        $orders = $pdostm->fetchAll(PDO::FETCH_OBJ);


        return $orders;
    }
    
    //to delete order(Admin can Delete it)
     public function deleteOrder($id, $dbcon){
        $sql = "DELETE FROM checkout_delivery_info WHERE id = :id";

        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }
}
?>