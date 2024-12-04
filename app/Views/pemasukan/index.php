<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus"> Tambah Data</i>
            </button>

        </div>
        <div class="card-body"> 
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pemasukan as $row) : ?>
                        <tr>
                            <td scope="row"> <?= $i; ?></td>
                            <td><?= $row['tanggal']; ?></td>
                            <td><?= $row['keterangan']; ?></td>
                            <td><?= $row['jumlah']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <!-- Tambahkan lebih banyak data di sini jika diperlukan -->
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pemasukan/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <label for="tanggal"></label>
                        <input type="text" name="tanggal" id="" class="form-control" placeholder="Masukan Tanggal">
                    </div>
                    <div class="form-group mb-0">
                        <label for="keterangan"></label>
                        <input type="text" name="keterangan" id="" class="form-control" placeholder="Masukan Keterangan">
                    </div>
                    <div class="form-group mb-0">
                        <label for="jumlah"></label>
                        <input type="text" name="jumlah" id="" class="form-control" placeholder="Masukan Jumlah">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>