<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Guru</div>
                <div class="col-4">
                    <a href="?m=teacher&s=view" class="btn btn-large btn-primary float-end">
                        <i class="fas fa-plus">Kembali</i> 
                    </a>
                </div>
            </div>
<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = '$id'";
$result = mysqli_query($con, $sql) ;
$r = mysqli_fetch_assoc($result);
?>
            <div class="card-body">
                <form action="?m=teacher&s=update" method="post">
                    <div class="mb-2">
                        <input type="text" value="<?= $r['nip']; ?>" name="nip" class="form-control" placeholder="NIP" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" value="<?= $r['name']; ?>" name="name" class="form-control" placeholder="Name" required autofocus>
                    </div> 
                    <div class="mb-3">
                        <input type="text" value="<?= $r['pob']; ?>" name="pob" class="form-control" placeholder="POB" required autofocus>
                    </div> 
                    <div class="mb-3">
                        <input type="date" value="<?= $r['dob']; ?>" name="dob" class="form-control" placeholder="DOB" required autofocus>
                    </div> 
                    <div class="mb-3">
                        <img src="teacher/photo/<?= $r['photo']; ?>" alt="Gambar Belum Dimasukan">
                    </div>

                    <div class="mb-3">
                        <label for="">Masukan Gambar Untuk Pengganti</label>
                        <input type="file" name="foto" class="form-control" accept="photo/*">
                    </div>
                    <div class="mb-3">
                        <input type="text" value="<?= $r['phone']; ?>" name="phone" class="form-control" placeholder="Phone" required autofocus>
                    </div> 
                    <div class="mb-3">
                        <select name="subject_id" class="form-control" required>
                            <option value="">Pilih Subject</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM subjects";
                            $result = mysqli_query($con, $sql);
                            while ($r1 = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r1['id'] . "' " . ($r1 ['id'] == $r['subject_id'] ? 'selected' : '') . ">" . $r1['subject'] . "</option>";
                            }
                            ?>
                        </select>
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