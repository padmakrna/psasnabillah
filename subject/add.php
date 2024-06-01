<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Subject</div>
                <div class="col-4">
                    <a href="?m=subject&s=view" class="btn btn-large btn-primary float-end">
                        <i class="fas fa-plus">Kembali</i> 
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=subject&s=save" method="post">
                    <div class="mb-2">
                        <input type="text" name="subject" class="form-control" placeholder="Mata Pelajaran" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="hour" class="form-control" placeholder="Jam" required autofocus>
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