<?php
$page_title = "UpdateFAQ";
session_start();

require_once '../database/Database.php';
require_once 'Faq.php';
include "../header.php"; 

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();
    $f = new Faq();
    $faq = $f->getFaqById($id, $dbcon);
}
if(isset($_POST['updFaq'])){
    $id= $_POST['fid'];
    $faq_question = $_POST['faq_question'];
    $faq_answer = $_POST['faq_answer'];
    $dbcon = Database::getDb();
	$f = new Faq();
    $count = $f->updateFaq($id, $faq_question, $faq_answer, $dbcon);
    if($count){
        header("Location: listfaqs.php");
    } else {
        echo  "problem Updating";
    }
}
?>

<div class="container">
    <br><br><br>
    <h2>Admin</h2>
<form action="" method="post">
    <input type="hidden" name="fid" value="<?= $faq->id; ?>" />
   Question: <input type="text" name="faq_question" value="<?= $faq->faq_question; ?>" class="form-control" /><br/>
    Answer: <input type="text" name="faq_answer" value="<?= $faq->faq_answer; ?>" class="form-control"/><br />
    <input type="submit" name="updFaq" value="Update FAQ" class="btn btn-default">
	<a href="listfaqs.php" class="btn btn-default">Go Back</a>
</form>
</div>