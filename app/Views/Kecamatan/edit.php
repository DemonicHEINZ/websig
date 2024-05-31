<?= $this->extend('_Layouts/main_layout'); ?>

<?= $this->section('content'); ?>
<main class="col-10 ms-sm-auto px-md-4 pt-4">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data <?= $title ?></h4>
            </div>
            <div class="card-body">
                <form action="<?= base_url('/kecamatan/update/' . $kecamatan['kode_kecamatan']) ?>" method="POST">
                    <div class="form-group">
                        <label for="kode_kecamatan">Kode Kecamatan</label>
                        <input type="text" id="kode_kecamatan" class="form-control" name="kode_kecamatan" value="<?= $kecamatan['kode_kecamatan'] ?>" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama_kecamatan">Nama Kecamatan</label>
                        <input type="text" id="nama_kecamatan" class="form-control" name="nama_kecamatan" value="<?= $kecamatan['nama_kecamatan'] ?>" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="jumlah_penduduk">Jumlah Penduduk</label>
                        <input type="number" id="jumlah_penduduk" class="form-control" name="jumlah_penduduk" value="<?= $kecamatan['jumlah_penduduk'] ?>" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="luas_wilayah">Luas Wilayah</label>
                        <input type="text" id="luas_wilayah" class="form-control" name="luas_wilayah" value="<?= $kecamatan['luas_wilayah'] ?>" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="id_kabupaten">Pilih Kabupaten</label>
                        <select id="id_kabupaten" class="form-control" name="id_kabupaten" required>
                            <?php foreach ($kabupaten as $kab) : ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"><?= $kab['nama_kabupaten'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-sm-12 d-flex mt-5">
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="<?= base_url('/kecamatan') ?>" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>