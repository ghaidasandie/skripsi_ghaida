<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data pengeluaran berhasil <strong><?= session()->getFlashdata('pesan'); ?></strong>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus"> Tambah Data</i>
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id_pengeluaran</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengeluaran as $row): ?>
                        <tr>
                            <td><?= $row['id_pengeluaran']; ?></td>
                            <td><?= $row['tanggal']; ?></td>
                            <td><?= $row['keterangan']; ?></td>
                            <td><?= $row['jumlah']; ?></td>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-sm btn-warning" data-id="<?= $row['id_pengeluaran']; ?>" data-tanggal="<?= $row['tanggal']; ?>" data-keterangan="<?= $row['keterangan']; ?>" data-jumlah="<?= $row['jumlah']; ?>"> <i class=" fa fa-edit"></i></button>
                                <!-- Tombol hapus dengan id_pengeluaran diubah agar dinamis -->
                                <button type="button" data-toggle="modal" data-target="#modalHapus<?= $row['id_pengeluaran']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button> <!-- Perubahan -->
                            </td>
                        </tr>

                        <!-- Modal Hapus (diubah agar dinamis) -->
                        <div class="modal fade" id="modalHapus<?= $row['id_pengeluaran']; ?>"> <!-- Perubahan -->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="/pengeluaran/hapus/<?= $row['id_pengeluaran']; ?>" class="btn btn-primary">Yakin</a> <!-- Perubahan -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Ubah Data Pengeluaran -->
<div class="modal fade" id="modalUbah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pengeluaran/ubah'); ?>" method="post">
                    <div class="form-group mb-2">
                        <label for="id_pengeluaran">ID Pengeluaran</label>
                        <input type="text" name="id_pengeluaran" id="id_pengeluaran" class="form-control" value="<?= $row['id_pengeluaran']; ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $row['tanggal']; ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $row['keterangan']; ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" value="<?= $row['jumlah']; ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name='ubah' class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
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
                <form action="<?= base_url('pengeluaran/tambah'); ?>" method="post">
                    <div class="form-group mb-2">
                        <label for="keterangan">ID Pengeluaran</label>
                        <input type="text" name="id_pengeluaran" class="form-control" placeholder="Masukan ID" value="" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Masukan Keterangan" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Masukan Jumlah" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name='tambah' class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>