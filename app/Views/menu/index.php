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
                        <th>Id_Menu</th>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($menu as $row) : ?>
                        <tr>
                            <td scope="row"> <?= $i; ?></td>
                            <td><?= $row['id_menu']; ?></td>
                            <td><?= $row['gambar']; ?></td>
                            <td><?= $row['nama_menu']; ?></td>
                        </tr>
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
                <form action="<?= base_url('menu/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-2">
                        <input type="file" name="gambar" class="dropify" data-height="100">
                    </div>
                    <div class="form-group mb-2">
                        <label for="id_menu"></label>
                        <input type="text" name="id_menu" id="" class="form-control" placeholder="Masukan id_menu">
                    </div>
                    <div class="form-group mb-0">
                        <label for="nama_menu"></label>
                        <input type="text" name="nama_menu" id="" class="form-control" placeholder="Masukan Nama Menu">
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