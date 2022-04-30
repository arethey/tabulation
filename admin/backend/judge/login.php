<?php 
    include '../database.php';
    if (isset($_POST['submit'])) {
        $code = $_POST['code'];

        $a = new database();
        $a->select("tbljudge","*","code='$code'");
        $result = $a->sql;

        $row = mysqli_fetch_assoc($result);
        if(isset($row)){
            if($row['status'] === '1'){
                $a->select("tblcontestant","*");
                $result = $a->sql;
                while ($row2 = mysqli_fetch_assoc($result)){
                    $judge_id = $row['id'];
                    $contestant_id = $row2['id'];
                    $choreography = 0;
                    $skills = 0;
                    $costume = 0;
                    $time = 0;
                    $overall = 0;
                    $total = 0;
                    $a->insert('tblfolkdance',['judge_id'=>$judge_id, 'contestant_id'=>$contestant_id, 'choreography'=>$choreography, 'skills'=>$skills, 'costume'=>$costume,'time'=>$time, 'overall'=>$overall, 'total'=>$total]);
                }
                session_start();
                $_SESSION['id'] = $row['id'];
                header('location:/kkdat/folkdance/index.php');
            }else if($row['status'] === '2'){
                session_start();
                $_SESSION['id'] = $row['id'];
                header('location:/kkdat/folkdance/index.php');
            }else{
                header('location:/kkdat/folkdance/login.php?error=invalid');
            }
        }else{
            header('location:/kkdat/folkdance/login.php?error=notfound');
        }
    }
?>
