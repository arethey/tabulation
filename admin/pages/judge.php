<?php
    $view = isset($_GET['action']) && !empty($_GET['action']) ? $_GET['action'] : '';
    $content = 'list.php';
    switch ($view) {
        case 'insert':
            $content = 'insert.php';
            break;
        case 'edit':
            $content = 'edit.php';
            break;
        default:
            $content = 'list.php';
            break;
    }
    include('pages/judge/'.$content);
?>
