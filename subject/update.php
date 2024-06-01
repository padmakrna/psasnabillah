<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];

    $sql = "UPDATE subjects SET subject='$subject', hour='$hour' WHERE id='$id'";
    $result = mysqli_query($con, $sql);


    if ($result) {
        header('location: index.php?m=subject&s=view');
    } else {
        include "index.php?m=subject&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}