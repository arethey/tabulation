<div class="container">
    <div class='w-100 m-auto' style='max-width: 400px'>
        <h3>New Judge</h3>
        <form action="backend/judge/insert.php" method="post">
            <?php include 'form.php'; ?>
            <a href="index.php?page=judge" class="btn btn-outline-dark">Cancel</a>
            <button type="submit" name='submit' class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
