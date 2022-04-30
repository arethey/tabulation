<div class="container">
    <div class='w-100 m-auto' style='max-width: 400px'>
        <h3>Edit Contestant</h3>
        <?php 
            include 'backend/database.php';

            $id = $_GET['id'];

            $b = new database();
            $b->select("tblcontestant","*","id='$id'");
            $result = $b->sql;

            $row = mysqli_fetch_assoc($result);
        ?>
        <form action="backend/contestant/edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <?php include 'form.php'; ?>
            <a href="index.php?page=contestant" class="btn btn-outline-dark">Cancel</a>
            <button type="submit" name='submit' class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
