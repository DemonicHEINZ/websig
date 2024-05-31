<?= $this->extend('_Layouts/main_layout'); ?>

<?= $this->section('content'); ?>
<main class="col-10 ms-sm-auto px-md-4 pt-4">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data <?= $title ?></h4>
            </div>
            <div class="card-body">
                <form action="<?= base_url('/kecamatan/store') ?>" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="kode-kecamatan-horizontal" class="mt-2">Kode Kecamatan</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="kode-kecamatan-horizontal" class="form-control" name="kode_kecamatan" placeholder="Kode Kecamatan" required>
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="nama-kecamatan-horizontal" class="mt-2">Nama Kecamatan</label>
                            </div>
                            <div class="col-md-8 form-group mt-2">
                                <input type="text" id="nama-kecamatan-horizontal" class="form-control" name="nama_kecamatan" placeholder="Nama Kecamatan" required>
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="jumlah-penduduk-horizontal" class="mt-2">Jumlah Penduduk</label>
                            </div>
                            <div class="col-md-8 form-group mt-2">
                                <input type="number" id="jumlah-penduduk-horizontal" class="form-control" name="jumlah_penduduk" placeholder="Jumlah Penduduk" required>
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="luas-wilayah-horizontal" class="mt-2">Luas Wilayah</label>
                            </div>
                            <div class="col-md-8 form-group mt-2">
                                <input type="number" id="luas-wilayah-horizontal" class="form-control" name="luas_wilayah" placeholder="Luas Wilayah" required>
                            </div>
                            <!-- Tambahkan dropdown untuk pilih kabupaten -->
                            <div class="col-md-4 mt-2">
                                <label for="kabupaten-select" class="mt-2">Kabupaten</label>
                            </div>
                            <div class="col-md-8 form-group mt-2">
                                <select id="kabupaten-select" class="form-control" name="id_kabupaten" required>
                                    <option value="">Pilih Kabupaten</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                        <option value="<?= $kab['id_kabupaten'] ?>"><?= $kab['nama_kabupaten'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <a href="<?= base_url('/kecamatan') ?>" class="btn btn-danger me-1 mb-1">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>