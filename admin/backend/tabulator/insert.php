<?php 
    include '../database.php';
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $choreography = intval($_POST['choreography']);
        $skills = intval($_POST['skills']);
        $costume = intval($_POST['costume']);
        $time = intval($_POST['time']);
        $overall = intval($_POST['overall']);

        $t_choreography = $choreography * 0.30;
        $t_skills = $skills * 0.30;
        $t_costume = $costume * 0.20;
        $t_time = $time * 0.10;
        $t_overall = $overall * 0.10;
        
        $total = ($t_choreography + $t_skills + $t_costume + $t_time + $t_overall);

        echo $total;
        
        $a = new database();
        $a->update('tblfolkdance',['total'=>$total, 'choreography'=>$choreography, 'skills'=>$skills, 'costume'=>$costume,'time'=>$time, 'overall'=>$overall],"id='$id'");
        
        if ($a == true) {
            header('location:/kkdat/folkdance');
        }
    }
?>
