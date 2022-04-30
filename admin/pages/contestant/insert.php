<div class="container">
    <div class='w-100 m-auto' style='max-width: 400px'>
        <h3>New Contestant</h3>
        <form action="backend/contestant/insert.php" method="post">
            <?php include 'form.php'; ?>
            <a href="index.php?page=contestant" class="btn btn-outline-dark">Cancel</a>
            <button type="submit" name='submit' class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
