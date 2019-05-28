<?php
class Cakes
{
    public function getCakeById($id, $db){
        $sql = "SELECT * FROM cakes WHERE ID = :id ";     
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        $Cakes =  $pst->fetch(PDO::FETCH_OBJ);
        return $Cakes;
    }

    public function getAllCakes($dbcon)
    {

        $sql = "SELECT * FROM cakes";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $newCake = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $newCake;
    }
    
    function addCake($cakeName, $cakeDesc, $cakePic, $db)
    {
        $sql = "INSERT INTO cakes (cakeName, cakeDesc, cakeImage) 
              VALUES (:cakename, :cakedesc, :cakeimage) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':cakename', $cakeName);
        $pst->bindParam(':cakedesc', $cakeDesc);
        $pst->bindParam(':cakeimage', $cakePic);

        $count = $pst->execute();
        return $count;

    }

    public function deleteCake($id, $db){
        $sql = "DELETE FROM cakes WHERE ID = ?";
        $pst = $db->prepare($sql);
        $pst->execute(array($id));
        $count = $pst->execute();
        return $count;
    }
}