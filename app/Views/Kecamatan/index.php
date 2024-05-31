<?= $this->extend('_Layouts/main_layout') ?>

<?= $this->section('content') ?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Data <?= $title ?></h1>
    </div>

    <div class="mb-3">
        <a href="<?= base_url('/kecamatan/create') ?>" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>

    <table class="table table-hover table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Kecamatan</th>
                <th class="text-center">Nama Kecamatan</th>
                <th class="text-center">Jumlah Penduduk</th>
                <th class="text-center">Luas Wilayah</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kecamatan as $key => $data) : ?>
                <tr>
                    <td class="text-center"><?= $key + 1 ?></td>
                    <td class="text-center"><?= $data['kode_kecamatan'] ?></td>
                    <td class="text-center"><?= $data['nama_kecamatan'] ?></td>
                    <td class="text-center"><?= number_format(esc($data['jumlah_penduduk']), 0, ',', '.') ?></td>
                    <td class="text-center"><?= number_format((float) $data['luas_wilayah'], 2, ',', '.') ?></td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="<?= base_url('/kecamatan/edit/' . $data['kode_kecamatan']) ?>" class="btn btn-success me-2" title="Edit">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-danger" title="Delete" onclick="confirmDelete('<?= base_url('/kecamatan/delete/' . $data['kode_kecamatan']) ?>')">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?= $this->endSection() ?>

<?= $this->section('javascript'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(deleteUrl) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
            }
        });
    }
</script>
<?= $this->endSection(); ?>