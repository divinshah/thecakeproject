<?php

class Checkout{
    
    
    //add Customer Information to the database
    public function addCustomerInfo( $firstname, $lastname, $streetname, $city, $province, $postal_code, $email_id, $phone_no, $delivery_date, $order_id, $dbcon)
    {
        $order_id = uniqid(); //order id 
        $sql = "INSERT INTO checkout_delivery_info (firstname, lastname, streetname, city, province, postal_code, email_id, phone_no, delivery_date, order_id )
                VALUES( :firstname, :lastname, :streetname, :city, :province, :postal_code, :email_id, :phone_no, :delivery_date, :order_id)"; //sql query to insert all details for an employee and also which post applied for (means job_id as a foreign key from JobPosition_admin table) 
    
    $pst = $dbcon->prepare($sql); //prepare statement 
    
    // to bind all parameter
   
    $pst->bindParam(':firstname', $firstname);
    $pst->bindParam(':lastname', $lastname);
    $pst->bindParam(':streetname', $streetname);
    $pst->bindParam(':city', $city);
    $pst->bindParam(':province', $province);
    $pst->bindParam(':postal_code', $postal_code);
    $pst->bindParam(':email_id', $email_id);
    $pst->bindParam(':phone_no', $phone_no);
    $pst->bindParam(':delivery_date', $delivery_date);
    $pst->bindParam(':order_id', $order_id);
    
    
    $count = $pst->execute();//execute prepare statement
        
    return $count;  //return 1 get answer if 0 there is error
    
    }
    
    
    //get details of customer
    public function getAllCustomerWithDetails($dbcon)
    {
        
        $sql = "SELECT *
                FROM checkout_delivery_info
                "; //sql query to get list of employees
      
        $pdostm = $dbcon->prepare($sql); //prepare statement

        $pdostm->execute();  //execute  

        $customerdetails = $pdostm->fetchAll(PDO::FETCH_OBJ); //Fetch as an object


        return $customerdetails; //return all employees
    }
    
    
    //to get order details by using id
    
    public function getOrderById($id, $dbcon){
     
       $sql = "SELECT * FROM checkout_delivery_info WHERE id = :id";  
        
        $pst = $dbcon->prepare($sql); 
        
        $pst->bindParam(':id', $id);
        
        
        $orderdetail = $pst->execute();
        
        $orderdetail = $pst->fetch(PDO::FETCH_OBJ);
        
        return $orderdetail; 
    }
       
}


?>