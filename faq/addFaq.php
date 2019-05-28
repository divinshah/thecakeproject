<?php
$page_title = "AddFAQ";

session_start();
require_once '../database/Database.php';
require_once 'Faq.php';
echo "<link rel='stylesheet' type='text/css' href='faq.css' />";

// define variables and set to empty values
$queErr = $ansErr = "";
$question = $answer = "";

// Only admin will be able to make some changes!

 if(isset($_POST['question'])){
       $faq_question = $_POST['question'];
	   $faq_answer = $_POST['answer'];
        
        $db = Database::getDb();
        $c = new Faq();
        $my_data = $c->addFaq($faq_question, $faq_answer, $db);
 }
?>

<div class="container">
    <h3>Add new FAQ</h3>
<form action="#" method="post">
	<label for="faq_question">Question:</label>
	<textarea type="text" name="question" value="<?php echo $question;?>"></textarea>
	<br/>
	<label for="faq_question">Answer:</label>
	<textarea type="text" name="answer" value="<?php echo $answer;?>"></textarea>
	<br/>

	<input type="submit" name="addfaq" value="Add Faq">
</form>
<a href="listfaqs.php">Go to the list</a>
</div>