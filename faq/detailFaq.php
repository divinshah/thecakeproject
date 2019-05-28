<?php
require_once '../database/Database.php';
require_once 'Faq.php';

if(isset($_GET['faq_id'])){
    $id = $_GET['faq_id'];
    $dbcon = Database::getDb();
    $f = new Faq();
    $faq= $c->getFaqById($id, $dbcon);
}
echo  "Question: " . $faq->faq_question . "<br />";
echo  "Answer: " . $faq->faq_answer . "<br />";
