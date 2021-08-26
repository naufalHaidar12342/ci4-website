<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>
<?php
$callModel = new ('App\Models\KirimanPengunjungModel');
$comments = $callModel->findAll();
?>
<div class="uk-container uk-margin-large ">
    <div class="uk-text-center">
        <h3 class="">Saran.</h3>
        <h4 class="uk-text-meta">Kirimkan game kesukaan / saran untuk website ini!</h4>
        <!-- tombol untuk menuju ke section yang diinginkan -->
        <div class="button-section">
            <div class="button-inner-section">
                <a href="#suggest_something" class="uk-button uk-button-default ">
                    <i class="ri-file-edit-fill" style="font-size: 24px;"></i>
                    Saran,dong!
                </a>
                <a href="#viewers_comments" class="uk-button uk-button-default">
                    <i class="ri-eye-fill" style="font-size: 24px;"></i>
                    Lihat Kiriman
                </a>
            </div>
        </div>

    </div>
</div>
<div class="uk-container uk-margin uk-form-stacked" id="suggest_something">
    <form>
        <?= csrf_field(); ?>
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Legend</legend>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Input">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
            </div>



        </fieldset>
    </form>
</div>
<!-- container untuk menampung komentar yang ditampilkan -->
<div class="uk-container uk-margin-large">
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
</div>
<?= $this->endSection(); ?>