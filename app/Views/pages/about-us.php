<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>

<div class="uk-container uk-margin-large">
    <div class="uk-text-center">
        <h3>About Us.</h3>
        <h3 class="uk-text-meta">
            Info tentang pengembang beserta teknologi yang digunakan dalam website ini.
        </h3>
        <!-- tombol untuk menuju ke section yang diinginkan -->
        <div class="button-section">
            <div class="button-inner-section">
                <a href="#developers_section" class="uk-button uk-button-default ">
                    <i class=" ri-github-fill" style="font-size: 24px; "></i>
                    Developers
                </a>
                <a href="#technologies_section" class="uk-button uk-button-default">
                    <i class=" ri-github-fill" style="font-size: 24px;"></i>
                    Technologies
                </a>
            </div>
        </div>
    </div>
</div>


<!-- section milik developer -->
<div class="uk-container uk-margin-large" id="developers_section">
    <div class="uk-text-center">
        <h3> Meet The Devs</h3>
        <h3 class="uk-text-meta">Kenali sosok di balik hadirnya website ini.</h3>
    </div>
    <?= $this->include('/layouts/about-devs'); ?>

    <?php
    $callModel = new ('App\Models\TeknologiModel');
    $techs = $callModel->findAll();
    ?>
    <!-- section milik teknologi yang digunakan website -->
    <div class="uk-container uk-margin-large">
        <div class="uk-text-center uk-margin-medium-bottom">
            <h3>Technologies</h3>
            <h3 class="uk-text-meta">
                Teknologi yang digunakan dalam membangun website ini.
            </h3>
        </div>
        <div class="uk-child-width-1-4@m" uk-grid>
            <?php foreach ($techs as $technology) : ?>
                <div>
                    <div class="uk-card uk-card-hover uk-card-default uk-border-rounded">
                        <!-- cover picture milik game -->
                        <div class="uk-card-media-top">
                            <img src="/img/technologies/<?= htmlspecialchars($technology['logo'], ENT_QUOTES, 'UTF-8'); ?>" alt="" width="100%" height="100%" uk-img style="border-radius: 10px;">
                        </div>

                        <div class="uk-card-body">
                            <h3 class="uk-card-title">
                                <?= htmlspecialchars($technology['nama_teknologi'], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>

                            <p uk-margin>
                                <?= htmlspecialchars($technology['deskripsi_singkat'], ENT_HTML5, 'UTF-8'); ?>
                            </p>


                            <div class="uk-card-footer uk-margin">
                                <a href="<?= htmlspecialchars($technology['link_belajar'], ENT_HTML5, 'UTF-8'); ?>" class="uk-button uk-button-text" target="_blank" rel="noreferrer">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>