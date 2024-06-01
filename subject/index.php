<?php

$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';

switch ($submodule) {
    case 'view':
        include('view.php');
        break;
    case 'add':
        include('subject/add.php');
        break;
    case 'save':
        include('subject/save.php');
        break;
    case 'edit':
        include('subject/edit.php');
        break;
    case 'delete':
        include('subject/delete.php');
        break;
    case 'update':
        include('subject/update.php');
        break;
}