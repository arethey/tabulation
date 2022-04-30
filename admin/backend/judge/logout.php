<?php 
    include '../database.php';
    $a = new database();
    $id = $_GET['id'];
    $status = 0;
    $a->update('tbljudge',['status'=>$status],"id='$id'");
    if ($a == true) {
        session_start();
        session_destroy();
        header('location:/kkdat/folkdance/login.php');
    }
?>
