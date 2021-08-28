<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>
<?php
$callModel = new ('App\Models\KirimanPengunjungModel');
$comments = $callModel->findAll();
?>
<section id="top_section"></section>
<div class="uk-container uk-margin-large">
    <div class="uk-text-center">
        <h3 class="">Saran.</h3>
        <h4 class="uk-text-meta">Kirimkan game kesukaan / saran untuk website ini!</h4>
        <!-- tombol untuk menuju ke section yang diinginkan -->
        <div class="button-section">
            <div class="button-inner-section">
                <a href="#suggest_something" class="uk-button uk-button-default uk-text-decoration-none ">
                    <i class="ri-file-edit-fill" style="font-size: 24px;"></i>
                    Saran,dong!
                </a>
                <a href="#viewers_comments" class="uk-button uk-button-default uk-text-decoration-none">
                    <i class="ri-eye-fill" style="font-size: 24px;"></i>
                    Lihat Kiriman
                </a>
            </div>
        </div>

    </div>
</div>

<div class="uk-container uk-margin uk-form-stacked" id="suggest_something">

    <form action="/KanalGame/save" method="POST">
        <?= csrf_field(); ?>
        <fieldset class="uk-fieldset">

            <legend class="uk-legend uk-text-center">Saran/Komentar</legend>
            <!-- alert ketika berhasil mengirim komentar -->
            <?php if (session()->getFlashData('success')) : ?>
                <div class="uk-alert-success uk-margin uk-border-rounded" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p><?= session()->getFlashData('success'); ?></p>
                </div>
            <?php endif; ?>


            <div class="uk-margin">
                <input class="uk-input  <?= ($validation->hasError('pengunjung')) ? 'uk-form-danger' : ''; ?>" type="text" placeholder="<?= ($validation->hasError('pengunjung') ? $validation->getError('pengunjung') : 'Isi nama kalian disini,ya!'); ?>" name="pengunjung">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea uk-border-rounded <?= ($validation->hasError('komentar_saran')) ? 'uk-form-danger' : ''; ?>" rows="5" placeholder="<?= ($validation->hasError('komentar_saran') ? $validation->getError('komentar_saran') : 'Isi nama kalian disini,ya!'); ?>" name="komentar_saran"></textarea>
            </div>
            <div class="uk-margin">
                <button type="submit" class="uk-button">
                    <i class="ri-send-plane-fill"></i>
                    Kirimkan
                </button>
            </div>



        </fieldset>
    </form>
</div>
<!-- container untuk menampung komentar yang ditampilkan -->
<div class="uk-container uk-margin-large" id="viewers_comments">
    <?php foreach ($comments as $comment) : ?>
        <div class="uk-card uk-card-default uk-margin-medium">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-circle" width="50" height="50" src="/img/profile-user.svg">
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">
                            <?= htmlspecialchars($comment['nama_pengunjung'], ENT_QUOTES, 'UTF-8'); ?>
                        </h3>
                        <p class="uk-text-meta uk-margin-remove-top">
                            <?php $convertTimestamp = strtotime($comment['ditambahkan_pada']); ?>
                            <?php $convertDate = date('d-F-Y H:i:s e:P', $convertTimestamp); ?>
                            mengomentari pada <?= htmlspecialchars($convertDate, ENT_HTML5, 'UTF-8'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> -->
                <p>
                    <?= htmlspecialchars($comment['komentar_kiriman'], ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- tombol untuk kembali ke atas -->
    <div class="uk-text-center">
        <a href="#top_section" class="uk-button uk-button-default">
            <i class="fas fa-angle-double-up"></i>
            Ke Atas
        </a>
    </div>
</div>


<?= $this->endSection(); ?>