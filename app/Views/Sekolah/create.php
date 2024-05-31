<?= $this->extend('_Layouts/main_layout'); ?>

<?= $this->section('content'); ?>
<main class="col-10 ms-sm-auto px-md-4 pt-4">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4><?= $title ?></h4>
            </div>
            <div class="card-body">
                <form action="<?= base_url('/sekolah/store') ?>" method="POST">
                    <div class="form-group">
                        <label for="npsn">NPSN</label>
                        <input type="text" id="npsn" class="form-control mt-2" name="npsn" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" id="nama_sekolah" class="form-control mt-2" name="nama_sekolah" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="alamat_sekolah">Alamat Sekolah</label>
                        <input type="text" id="alamat_sekolah" class="form-control mt-2" name="alamat_sekolah" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="status_sekolah">Status Sekolah</label>
                        <input type="text" id="status_sekolah" class="form-control mt-2" name="status_sekolah" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                        <input type="text" id="jenjang_pendidikan" class="form-control mt-2" name="jenjang_pendidikan" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="koordinat">Koordinat</label>
                        <input type="text" id="koordinat" class="form-control mt-2" name="koordinat" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="kode_kecamatan">Kecamatan</label>
                        <select id="kode_kecamatan" class="form-control mt-2" name="kode_kecamatan" required>
                            <?php foreach ($kecamatan as $kec) : ?>
                                <option value="<?= $kec['kode_kecamatan'] ?>"><?= $kec['nama_kecamatan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-sm-12 d-flex mt-4">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <a href="<?= base_url('/sekolah') ?>" class="btn btn-secondary me-1 mb-1">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>