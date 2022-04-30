<?php include('layout-head.php') ?>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contestant">Contestants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=judge">Judges</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=tabulator">Tabulator</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        $view = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : '';
        $title ='Dashboard';
        $content = 'dashboard.php';
        switch ($view) {
            case 'contestant':
                $title ='List of contestant';
                $content = 'contestant.php';
                break;
            case 'judge':
                $title ='List of judge';
                $content = 'judge.php';
                break;
            case 'tabulator':
                $title ='Tabulator';
                $content = 'tabulator.php';
                break;
            default:
                $title ='Dashboard';
                $content = 'dashboard.php';
                break;
        }

        include('scripts.php');
        include('pages/'.$content);
    ?>
</body>

<?php include('layout-footer.php') ?>
