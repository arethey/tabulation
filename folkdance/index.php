<?php
    session_start();
    if(empty($_SESSION['id'])){
        header('location:login.php');
    }
?>

<?php include('layout-head.php') ?>

<body class="bg-light">
    <?php include('layout-navbar.php'); include('scripts.php') ?>

    <div class="container">
        <?php 
            include '../admin/backend/database.php';
            $b = new database();
            $where = "tblfolkdance.judge_id=".$_SESSION['id'];
            $b->selectAndJoin("*", "tblcontestant", "tblfolkdance", "tblfolkdance.contestant_id = tblcontestant.id", $where);
            $result = $b->sql;
        ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="d-flex align-items-center mb-3 border" style="height: 50px" data-toggle="modal"
            data-target="<?php echo '#_'.$row['num'].'Modal'; ?>">
            <div class="h-100 d-flex align-items-center justify-content-center p-3 bg-primary text-white">
                <h4 class="mb-0"><?php echo $row['num']; ?></h4>
            </div>
            <div class="h-100 bg-warning text-white" style=<?php echo 'width:'.$row['total']."%"?>></div>
            <p class="mb-0 d-flex align-items-center justify-content-center ml-3"><?php echo $row['total'].'%' ?></p>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="<?php echo '_'.$row['num'].'Modal'; ?>" tabindex="-1"
            aria-labelledby="<?php echo $row['id'].'ModalLabel'; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?php echo $row['id'].'ModalLabel'; ?>">
                            <?php echo '#'.$row['num']." ".$row['name']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../admin/backend/tabulator/insert.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <!-- <input type="hidden" name="judge_id" value="<?php echo $_SESSION['id']; ?>">
                            <input type="hidden" name="contestant_id" value="<?php echo $row['contestant_id']; ?>"> -->
                            <?php include('form.php') ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</body>

<?php include('layout-footer.php') ?>
