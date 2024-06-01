<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $subject_id = $_POST['subject_id'];

    $acak = rand();
    $namafile = $_FILES['photo']['name'];
    $ukuran = $_FILES['photo']['size'];
    $akhiran = pathinfo($namafile, PATHINFO_EXTENSION);
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'svg');

    if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) {
        $sql = "UPDATE teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', photo='$nmfile', phone='$phone', subject_id='$subject_id' WHERE id='$id'";
    } else {
        if (!in_array($akhiran, $ekstensi)) {
            include("index.php?m=teacher");
            echo '<script language="JavaScript">';
            echo 'alert("Akhiran file Anda, tidak diijinkan.")';
            echo '</script>';
        } else {
            if ($ukuran < 1000000) {
                $nmfile = $acak . '_' . $namafile;
                move_uploaded_file($_FILES['photo']['tmp_name'], 'teacher/photo/'.$nmfile);
                $sql = "UPDATE teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', photo='$nmfile', phone='$phone', subject_id='$subject_id' WHERE id='$id'";
            } else {
                include("index.php?m=teacher");
                echo '<script language="JavaScript">';
                echo 'alert("Ukuran file Anda, terlalu besar.")';
                echo '</script>';
            }
        }
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=teacher&s=view');
    } else {
        include "index.php?m=teacher&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}