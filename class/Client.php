<?php
class Client
{
	public function addClients($username,$email,$password,$db)
	{
		$sql = "INSERT INTO clients (user_name,email,password)
		        VALUES (:user_name,:email,:password)";
		$pst = $db->prepare($sql);

		$pst->bindParam(':user_name', $username);
        $pst->bindParam(':email', $email);
        $pst->bindParam(':password', $password);

        $count = $pst->execute();
        return $count;

	}

	public function getAllClientsLogin($loginuser,$loginpass,$db){

        $sql = "SELECT*FROM clients WHERE user_name='$loginuser' and password='$loginpass'";
echo $sql; die();
    $pst = $db->prepare($sql);
    $pst->execute();
    $Clients = $pst->fetchAll(PDO::FETCH_OBJ);

    return $Clients;
  }
}