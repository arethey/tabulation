<div class="container">
    <?php 
        include 'backend/database.php';
        $b = new database();
        $b->selectAndJoin("*, tblcontestant.id AS contestant_id, tblfolkdance.id AS id", "tblcontestant", "tblfolkdance", "tblcontestant.id = tblfolkdance.contestant_id");
        $result = $b->sql;
    ?>
    <?php while ($row = mysqli_fetch_assoc($result)) {
        $choreography = $row['choreography'] * 0.30;
        $skills = $row['skills'] * 0.30;
        $costume = $row['costume'] * 0.20;
        $time = $row['time'] * 0.10;
        $overall = $row['overall'] * 0.10;

        $total = ($choreography + $skills + $costume + $time + $overall);
    ?>
    <div class="d-flex align-items-center mb-3" style="height: 50px" data-toggle="modal"
        data-target="<?php echo '#_'.$row['num'].'Modal'; ?>">
        <div class="h-100 d-flex align-items-center justify-content-center p-3 bg-primary text-white">
            <h4 class="mb-0"><?php echo $row['num']; ?></h4>
        </div>
        <div class="h-100 bg-warning text-white border" style=<?php echo 'width:'.$total."%"?>></div>
        <p class="mb-0 d-flex align-items-center justify-content-center"><?php echo $total.'%' ?></p>
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
                <form action="backend/tabulator/insert.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="contestant_id" value="<?php echo $row['contestant_id']; ?>">
                        <?php include('tabulator/form.php') ?>
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
