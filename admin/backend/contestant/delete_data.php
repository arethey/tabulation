<?php 
    include '../database.php';
    $id = $_POST['id'];

    $a = new database();
    $a->delete('tblcontestant',"id='$id'");
?>
