<?php
$page_title = "DeleteFAQ";
session_start();
require_once '../database/Database.php';
require_once 'Faq.php';


if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new Faq();
    $count = $s->deleteFaq($id, $dbcon);

    if($count){
        header("Location: listfaqs.php");
    }
}