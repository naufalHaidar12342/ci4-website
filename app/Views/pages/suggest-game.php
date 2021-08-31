<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>

<section id="top_section"></section>
<div class="uk-container uk-margin-medium">
    <div class="uk-text-center">
        <h4 class="">Saran.</h4>
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

    <form action="/kanal-game/save" method="POST">
        <?= csrf_field(); ?>
        <fieldset class="uk-fieldset">

            <legend class="uk-legend uk-text-center">Saran/Komentar</legend>
            <!-- alert ketika berhasil mengirim -->
            <?php

            use CodeIgniter\I18n\Time;

            if (session()->getFlashData('success')) : ?>
                <div class="uk-alert-success uk-margin uk-border-rounded" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p><?= session()->getFlashData('success'); ?></p>
                </div>
            <?php endif; ?>

            <div class="uk-margin">
                <input class="uk-input  <?= ($validation->hasError('pengunjung')) ? 'uk-form-danger' : ''; ?>" type="text" placeholder="Isi nama kalian disini, ya!" name="pengunjung" value="<?= old('pengunjung'); ?>">
                <?php if ($validation->hasError('pengunjung')) : ?>
                    <label for="" class="uk-text-danger"><?= $validation->getError('pengunjung'); ?></label>
                <?php endif; ?>
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea uk-border-rounded <?= ($validation->hasError('komentar_saran')) ? 'uk-form-danger' : ''; ?>" rows="5" placeholder="Isi komentar kalian disini,ya!" name="komentar_saran"><?= old('komentar_saran'); ?></textarea>
                <?php if ($validation->hasError('komentar_saran')) : ?>
                    <label for="" class="uk-text-danger"><?= $validation->getError('komentar_saran'); ?></label>
                <?php endif; ?>
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
<!-- komentar dikirim dari controller. -->
<div class="uk-container uk-margin" id="viewers_comments">
    <div class="uk-text-center uk-margin-medium-bottom">
        <h4> Comments.</h4>

    </div>
    <!-- pagination yang akan sembunyi untuk
    device dengan lebar 960px dan ke atas. akan
    muncul kalau dibawah 960px -->
    <div class="uk-text-center uk-margin-medium hide-on-med-and-up">
        <!-- parameternya : nama array key yang dikirim oleh controller, nama grup/array key
    yang kita tambahkan di app\Config\Pager , tepatnya pada array $templates-->
        <?= $pager->links('comments', 'comments_pagination'); ?>

    </div>

    <div class="uk-child-width-1-3@m" uk-grid>

        <!-- memanggil key dari array bernama '$comments' -->
        <?php foreach ($comments as $comment) : ?>
            <div>

                <div class="uk-card uk-card-default uk-card-small uk-margin-medium">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="/img/profile-user.svg" alt="user_icon">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">
                                    <?= htmlspecialchars($comment['nama_pengunjung'], ENT_QUOTES, 'UTF-8'); ?>
                                </h3>
                                <p class="uk-text-meta uk-margin-remove-top">
                                    <?php
                                    $convert = new Time($comment['ditambahkan_pada'], 'Asia/Jakarta', 'en_US');
                                    // parameter untuk format() bisa dilihat di
                                    //https://www.php.net/manual/en/datetime.format.php
                                    $formatted = $convert->format('d F Y G:i T P')
                                    ?>
                                    mengomentari pada <?= htmlspecialchars($formatted, ENT_HTML5, 'UTF-8'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>
                            <?= htmlspecialchars($comment['komentar_kiriman'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="uk-text-center uk-margin-medium">
        <!-- parameternya : nama array key yang dikirim oleh controller, nama grup/array key
    yang kita tambahkan di app\Config\Pager , tepatnya pada array $templates-->
        <?= $pager->links('comments', 'comments_pagination'); ?>

    </div>

</div>


<?= $this->endSection(); ?>