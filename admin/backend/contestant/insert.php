<?php 
    include '../database.php';
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $name = $_POST['name'];

        $a = new database();
        $a->insert('tblcontestant',['name'=>$name,'num'=>$num]);
        if ($a == true) {
            header('location:/kkdat/admin/index.php?page=contestant');
        }
    }
?>
