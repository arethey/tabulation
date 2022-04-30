<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="#">KKDAT Folkdance</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php
            if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
                ?>
            <li class="nav-item">
                <a class="nav-link" href="../admin/backend/judge/logout.php?id=<?php echo $_SESSION['id'] ?>">Logout</a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>
