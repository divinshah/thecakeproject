<?php
$page_title = "MR. Cake"; 
require_once 'database/Database.php';
require_once 'Faq.php';
require_once 'header.php'; 


$dbcon = Database::getDb();
$t = new Faq();
$myfaq =  $t->getAllFaq(Database::getDb());
?>
<h2 style="color:#EF3E64;"><center>Want to talk to us?</center></h2>
<div class='container'>
<?php foreach($myfaq as $faqs){?>
	
	<div id="mainContain">

	<div class="panelContainer">
    <?php echo "<h2>"  . $faqs->faq_question  .  "</h2> ". "<p class='list-group-item'>".$faqs->faq_answer . "</p>";
}
?>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready( function() {
	$('.list-group-item').hide();
	$('h2').click(function(){
		//$(this).previous('p').fadeToggle(2000);
		$('p').hide(3000);
		$(this).next('p').slideToggle(3000);
	});
	$('p').hover( 
		function(){$(this).css({'background':'white','color':'black'});},
		function(){$(this).css({'background':'black','color':'white'});}
		);

});
</script>
 