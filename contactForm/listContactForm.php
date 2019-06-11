<?php
$page_title = "Admin ListContactForm";
require_once '../database/Database.php';
require_once 'ContactForm.php';
require_once '../adminheader.php'; 

$dbcon = Database::getDb();
$t = new ContactForm();
$cf =  $t->getAllContactForm(Database::getDb());
?>

<!--Content-->
<main id="main_searchFaqAdmin">
        <div class="container">
            <div>
			 <ul class="list-group list-group-flush">
                <?php foreach($cf as $cfs){ ?>
                 
                 <li class="list-group-item"><?php echo "<a href='detailContactForm.php?id=$cfs->id'>" .  $cfs->f_name  . $cfs->l_name  . "</a>"?></li> 

		   
                    <form action='deleteContactForm.php' method='post'>
                        <input type='hidden' value='<?= $cfs->id; ?>' name='id' />
                        <input type='submit' value='Delete' name='delete' class="btn btn-danger" />
                    </form>
					</ul>
					
					</br></br>
					
                <?php } ?>
            </div>
        </div>

</main>
<?php require_once '../adminfooter.php';