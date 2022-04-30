<?php 
    include '../database.php';
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $name = $_POST['name'];
        $code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $status = 1;

        $a = new database();
        $a->insert('tbljudge',['name'=>$name,'num'=>$num, 'code'=>$code, 'status'=>$status]);
        if ($a == true) {
            header('location:/kkdat/admin/index.php?page=judge');
        }
    }
?>
