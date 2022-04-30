<?php
    session_start();
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        header('location:index.php');
    }

    include '../admin/backend/database.php';
    if (isset($_POST['submit'])) {
        $code = $_POST['code'];

        $a = new database();
        $a->select("tbljudge","*","code='$code'");
        $result = $a->sql;

        $row = mysqli_fetch_assoc($result);
        if(isset($row)){
            session_start();
            $_SESSION['id'] = $row['id'];
            // header('location: index.php');
        }else{
            header('location: login.php?error=notfound');
        }
    }
?>

<?php include('layout-head.php') ?>

<body class="bg-light">
    <div style="height: 100vh; width: 100vw" class="d-flex align-items-center justify-content-center">
        <div class="w-100 m-auto p-3 bg-white shadow" style="max-width: 400px">
            <?php
                if(isset($_GET['error']) && !empty($_GET['error'])){
                    if($_GET['error'] === 'invalid'){
                        echo '<div class="alert alert-danger" role="alert">
                        Oops! Unathorized access. Please contact system administratior.
                    </div>';
                    }else if($_GET['error'] === 'notfound'){
                        echo '<div class="alert alert-danger" role="alert">
                        Oops! Invalid code. Please enter the correct code.
                    </div>';
                    }
                }
            ?>
            <h1 class='text-center'>KKDAT</h1>
            <form action="../admin/backend/judge/login.php" method="post">
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="code" required />
                </div>
                <button type="submit" name="submit" class="btn btn-block btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

<?php include('layout-footer.php') ?>
