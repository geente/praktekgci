<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Tagihan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('tagihan'); ?>">Tagihan</a></div>
                <div class="breadcrumb-item">Tambah Tagihan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tambah Tagihan</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4>Simple Summernote</h4>
                        </div> -->
                        <div class="card-body">
                            <form action="<?= base_url('tagihan/insert'); ?>" method="post">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Tagihan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="nama_tagihan" type="text" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mahasiswa</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="id_user">
                                            <option value="">-- Pilih Mahasiswa --</option>
                                            <?php
                                            $mhs = $this->mastermodel->mahasiswa();
                                            foreach ($mhs as $m) :
                                            ?>
                                                <option value="<?= $m->id_user; ?>"><?= $m->nama; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Angkatan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="angkatan" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jurusan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="id_jurusan">
                                            <option value="">-- Pilih Jurusan --</option>
                                            <?php
                                            $jurusan = $this->mastermodel->jurusan();
                                            foreach ($jurusan as $js) :
                                            ?>
                                                <option value="<?= $js->id_jurusan; ?>"><?= $js->jurusan; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Tagihan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input name="jumlah" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>