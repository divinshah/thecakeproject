<?php
$page_title = "Contact Form";
include "../header.php";
require_once '../database/Database.php';
require_once 'ContactForm.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $t = new ContactForm();
    $cf = $t->getContactFormById($id, $dbcon);
}

echo "<div class='container'>";
echo "<br><br><br><h2>Admin</h2>";
echo  "First Name: " . $cf->f_name . "<br />";
echo  "Last Name: " . $cf->l_name . "<br />";
echo  "Phone Number: " . $cf->phone_number . "<br />";
echo "E-mail:" . $cf->email . "<br/>";
echo  "City : " . $cf->city . "<br />";
echo  "Message : " . $cf->message . "<br />";


echo '<a href="listContactForm.php" class="btn btn-default">Go Back</a>';
echo "</div>";
include "../footer.php";