<?php
session_start();
require_once 'database/Database.php';
require_once 'Faq.php';

// Only admin will be able to make some changes!
if(isset($_SESSION['username'] )){
    if ($_SESSION['username'] !== 'admin' ) {
        header("Location:login.php");
        die();
    } 
}else{
    header("Location:login.php");
    die();
}
 }
if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new Faq();
    $count = $s->deleteFaq($id, $dbcon);

    if($count){
        header("Location: listfaqs.php");
    }
}