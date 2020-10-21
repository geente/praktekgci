<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Tagihan</h1>
            <div class="section-header-breadcrumb">
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="<?= base_url('tagihan'); ?>">Tagihan</a></div>
                    <div class="breadcrumb-item">Data Tagihan</div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Tagihan</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('tagihan/bayar/' . $this->session->userdata('id_user')); ?>" class="btn btn-primary">Bayar Tagihan</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Nama Tagihan</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Status</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($tagihan as $tg) : ?>
                                            <tr>
                                                <td>
                                                    <?= $no++; ?>
                                                </td>
                                                <td><?= $tg->nama_tagihan; ?></td>
                                                <td>
                                                    <?= $tg->nama; ?>
                                                </td>
                                                <td>
                                                    <?= $tg->status; ?>
                                                </td>
                                                <td>
                                                    Rp. <?= $tg->jumlah; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>