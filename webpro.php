<?php

$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';


switch ($module) {
    case 'home':
        include_once('home.php');
        break;
    case 'teacher':
        include_once('teacher/index.php');
        break;
    case 'subject':
        include_once('subject/index.php');
        break;
}