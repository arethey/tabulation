<div class="container">
    <div class='w-100 m-auto' style='max-width: 400px'>
        <h3>Edit Judge</h3>
        <?php 
            include 'backend/database.php';

            $id = $_GET['id'];

            $b = new database();
            $b->select("tbljudge","*","id='$id'");
            $result = $b->sql;

            $row = mysqli_fetch_assoc($result);
        ?>
        <form action="backend/judge/edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <?php include 'form.php'; ?>
            <a href="index.php?page=judge" class="btn btn-outline-dark">Cancel</a>
            <button type="submit" name='submit' class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
