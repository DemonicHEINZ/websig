<?= $this->extend('_Layouts/main_layout') ?>

<?= $this->section('content') ?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Data <?= $title ?></h1>
    </div>

    <div class="mb-3">
        <a href="<?= base_url('/sekolah/create') ?>" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>

    <table class="table table-hover table-striped table-bordered">
        <thead class="table-primary">
            <tr class="text-center align-middle">
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>NPSN</th>
                <th>Nama Sekolah</th>
                <th>Alamat Sekolah</th>
                <th>Status</th>
                <th>Jenjang Pendidikan</th>
                <th>Koordinat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sekolah as $key => $data) : ?>
                <tr class="align-middle">
                    <td class="text-center"><?= $key + 1 ?></td>
                    <td><?= $data['nama_kecamatan'] ?></td>
                    <td class="text-center"><?= $data['npsn'] ?></td>
                    <td><?= $data['nama_sekolah'] ?></td>
                    <td><?= $data['alamat_sekolah'] ?></td>
                    <td class="text-center"><?= $data['status_sekolah'] ?></td>
                    <td class="text-center"><?= $data['jenjang_pendidikan'] ?></td>
                    <td class="text-center"><?= $data['koordinat'] ?></td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="<?= base_url('/sekolah/edit/' . $data['npsn']) ?>" class="btn btn-success me-2" title="Edit">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-danger" title="Delete" onclick="confirmDelete('<?= base_url('/sekolah/delete/' . $data['npsn']) ?>')">
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