<?php 
    include '../database.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $num = $_POST['num'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a = new database();
        $a->update('tblcontestant',['name'=>$name,'num'=>$num],"id='$id'");
        if ($a == true) {
            header('location:/kkdat/admin/index.php?page=contestant');
        }
    }
?>
