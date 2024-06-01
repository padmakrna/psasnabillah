<?php

$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';

switch ($submodule) {
    case 'view':
        include('view.php');
        break;
    case 'add':
        include('teacher/add.php');
        break;
    case 'save':
        include('teacher/save.php');
        break;
    case 'edit':
        include('teacher/edit.php');
        break;
    case 'delete':
        include('teacher/delete.php');
        break;
    case 'update':
        include('teacher/update.php');
        break;
}