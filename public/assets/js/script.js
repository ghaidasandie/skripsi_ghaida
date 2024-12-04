$(document).on('click','#btn-edit', function() {
    var id_pengeluaran = $(this).data('id');
    var tanggal = $(this).data('tanggal');
    var keterangan = $(this).data('keterangan');
    var jumlah = $(this).data('jumlah');

    $('.modal-body input[name="id_pengeluaran"]').val(id_pengeluaran);
    $('.modal-body input[name="tanggal"]').val(tanggal);
    $('.modal-body input[name="keterangan"]').val(keterangan);
    $('.modal-body input[name="jumlah"]').val(jumlah);
});
