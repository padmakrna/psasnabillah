<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Guru</div>
                <div class="col-4">
                    <a href="?m=teacher&s=view" class="btn btn-large btn-primary float-end">
                        <i class="fas fa-plus">Kembali</i> 
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=teacher&s=save" method="post">
                    <div class="mb-2">
                        <input type="text" name="nip" class="form-control" placeholder="NIP" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" class="form-control" placeholder="POB" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" class="form-control" placeholder="DOB" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" name="photo" class="form-control" accept="photo/*">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required autofocus>
                    </div>
                    <div class="mb-3">
                        <select name="subject_id" class="form-control" required>
                            <option value="">Pilih Subject</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM subjects";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r['id'] . "'>" . $r['subject'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary" value="Reset">&nbsp;
                        <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>