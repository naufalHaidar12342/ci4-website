<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>
<!-- section teratas dari about us -->
<div class="uk-container uk-margin">
    <div class="uk-text-center">
        <h3>About Us.</h3>
        <h4 class="uk-text-meta">
            Info tentang pengembang beserta teknologi yang digunakan dalam website ini.
        </h4>
        <!-- tombol untuk menuju ke section yang diinginkan -->
        <div class="button-section">
            <div class="button-inner-section">
                <a href="#developers_section" class="uk-button uk-button-default  hvr-sweep-to-right" style="font-size: 16px;">
                    <i class="fab fa-github fa-lg"></i>
                    Developers
                </a>
                <a href="#technologies_section" class="uk-button uk-button-default hvr-sweep-to-left" style="font-size: 16px;">
                    <i class="fas fa-tools"></i>
                    Technologies
                </a>
            </div>
        </div>
    </div>
</div>


<!-- section milik developer -->
<section id="developers_section"></section>
<div class="uk-container uk-margin">
    <div class="uk-text-center uk-margin-bottom">
        <h3> Meet The Devs</h3>
        <h4 class="uk-text-meta">Kenali sosok di balik hadirnya website ini.</h4>
    </div>

    <div class="uk-child-width-1-2@m uk-grid-match uk-margin" uk-grid>

        <!-- developer 1 -->
        <div>
            <div class="uk-card uk-card-default uk-card-hover">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img loading="lazy" class="uk-border-circle" width="120" height="120" src="/img/profiles/DSC_0491_460x460.webp">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom hvr-underline-from-left">Naufal Haidar</h3>
                            <p class="uk-text-meta uk-margin-remove-top">Mahasiswa kini mendalami PHP dan SQL</p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Naufal Haidar adalah mahasiswa yang kini menempuh pendidikan di perguruan tinggi. Saat ini, ia tengah mendalami pemrograman web, khususnya di bahasa PHP dan framework PHP.</p>
                    <div class="uk-list">
                        <p>
                            <a href="https://github.com/naufalHaidar12342" rel="noreferrer" target="_blank" class="uk-button-link hvr-pop">
                                <i class="ri-github-fill"></i>
                                GitHub
                            </a>
                        </p>
                        <p>
                            <a href="https://kanalgames.heydarrn.xyz" rel="noreferrer" target="_blank" class="uk-button-link hvr-pop">
                                <i class="ri-earth-fill"></i>
                                Website
                            </a>
                        </p>
                    </div>
                </div>
                <div class="uk-card-footer">
                    <a href="https://github.com/naufalHaidar12342" class="uk-button uk-button-text" rel="noreferrer" target="_blank">Read more</a>
                </div>
            </div>
        </div>

        <!-- developer 2 -->
        <div>
            <div class="uk-card uk-card-default uk-card-hover">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img loading="lazy" class="uk-border-circle" width="120" height="120" src="/img/profiles/ardhayudhatama.webp">
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-card-title uk-margin-remove-bottom hvr-underline-from-left">Yudhatama Ardha</h4>
                            <p class="uk-text-meta uk-margin-remove-top">Mahasiswa yang mendalami JavaScript, React, dan Node.js</p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Ardha adalah mahasiswa yang mendalami pemrograman web namun dengan bahasa JavaScript dan framework JS, utamanya React dan Node.js</p>
                    <div class="uk-list">
                        <p>
                            <a href="https://github.com/devardha" rel="noreferrer" target="_blank" class="uk-button-link hvr-pop">
                                <i class="ri-github-fill"></i>
                                GitHub
                            </a>
                        </p>
                        <p>
                            <a href="https://ardha.dev/" rel="noreferrer" target="_blank" class="uk-button-link hvr-pop">
                                <i class="ri-earth-fill"></i>
                                Website
                            </a>
                        </p>
                        <p></p>
                    </div>
                </div>
                <div class="uk-card-footer">
                    <a href="https://github.com/devardha" class="uk-button uk-button-text" rel="noreferrer" target="_blank">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section milik teknologi yang digunakan website -->
<section id="technologies_section"></section>
<div class="uk-container uk-margin-large">
    <div class="uk-text-center uk-margin-medium-bottom">
        <h3>Technologies</h3>
        <h4 class="uk-text-meta">
            Teknologi yang digunakan dalam membangun website ini.
        </h4>
    </div>
    <div class="uk-child-width-1-3@m" uk-grid>
        <?php foreach ($techs as $technology) : ?>
            <div>
                <div class="uk-card uk-card-hover uk-card-default uk-border-rounded">
                    <!-- cover picture milik game -->
                    <div class="uk-card-media-top">
                        <img loading="lazy" src="/img/technologies/<?= htmlspecialchars($technology['logo'], ENT_QUOTES, 'UTF-8'); ?>" alt="" width="100%" height="100%" uk-img style="border-radius: 10px;">
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
<?= $this->endSection(); ?>