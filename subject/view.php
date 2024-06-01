<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Data Subject</div>
                    <div class="col-4">
                        <a href="?m=subject&s=add" class="btn btn-large btn-primary float-end">
                            <i class="fas fa-plus">Tambah</i> 
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Jam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once('config.php');
                                $sql = "SELECT * FROM subjects";
                                $result = mysqli_query($con, $sql);
                                //echo $result;exit;
                                if (mysqli_num_rows($result) > 0) {
                                    $no = 1;
                                    while ($r = mysqli_fetch_assoc($result)) {
                                        echo '<tr>
                                                <td>'.$no.'</td>
                                                <td>'.$r['subject'].'</td>
                                                <td>'.$r['hour'].'</td>
                                                <td>
                                                <a href="?m=subject&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="?m=subject&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin Subject akan dihapus?\')">Hapus</a>
                                                </td>
                                            
                                            </tr>';
                                        $no++;
                                    }
                                } else {
                                    echo "<tr> <td colspan='5' align='center>Data</td></tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>