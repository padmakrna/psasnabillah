<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Subject</div>
                <div class="col-4">
                    <a href="?m=subject&s=view" class="btn btn-large btn-primary float-end">
                        <i class="fas fa-plus">Kembali</i> 
                    </a>
                </div>
            </div>
<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM subjects WHERE id = '$id'";
$result = mysqli_query($con, $sql) ;
$r = mysqli_fetch_assoc($result);
?>
            <div class="card-body">
                <form action="?m=subject&s=update" method="post">
                    <div class="mb-2">
                        <input type="text" value="<?= $r['subject']; ?>" name="subject" class="form-control" placeholder="Mata Pelajaran" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" value="<?= $r['hour']; ?>" name="hour" class="form-control" placeholder="SKS" required autofocus>
                    </div> 
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary" value="Reset">&nbsp;
                        <input type="submit" class="btn btn-primary" value="Update" name="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>