<?php
$page_title = "Admin ListFAQ";
session_start();
require_once '../database/Database.php';
require_once 'Faq.php'; 

$dbcon = Database::getDb();
$t = new Faq();
$myfaq =  $t->getAllFaq(Database::getDb());

?>
<!--Content-->
<main id="main_searchFaqAdmin">
        
        <div class="container">
		<h2>FAQ List</h2>
            <div>
			 <ul class="list-group">
                <?php foreach($myfaq as $faqs){ ?>
                 
           <li class="list-group-item">Question: <?= $faqs->faq_question ?> </li>
            <li class="list-group-item">Answer: <?= $faqs->faq_answer ?></li>
           
		   <form action='updateFaq.php' method='post'>
        <input type='hidden' value='<?= $faqs->id; ?>' name='id'/>
        <input type='submit' value='Update' name='update'  class="btn btn-success"/>
        </form>
		   
                    <form action='deleteFaq.php' method='post'>
                        <input type='hidden' value='<?= $faqs->id; ?>' name='id' />
                        <input type='submit' value='Delete' name='delete' class="btn btn-danger" />
                    </form>
					</ul>
					
					</br></br>
					
                <?php } ?>
            </div>
            <a href="addFaq.php" class="btn btn-default">Add new</a>
        </div>

</main>