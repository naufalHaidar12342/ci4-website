<?= $this->extend('/layouts/all-page'); ?>

<?= $this->section('content'); ?>
<div class="uk-container uk-margin">
    <div class="uk-text-center">
        <h4>Games</h4>
        <p class="uk-text-meta">Kumpulan game yang dibahas beserta deskripsi singkat mengenai game tersebut.</p>
    </div>
</div>
<!-- menangkap data yang dikirim oleh controller -->
<div class="uk-container uk-margin-large">
    <div class="uk-child-width-1-3@m" uk-grid>
        <!-- mengakses key dari assoc array bernama  '$show_game' -->
        <?php foreach ($show_game as $game) : ?>
            <div class="">
                <div class="uk-card uk-card-hover uk-card-default uk-border-rounded animate__animated animate__fadeInUp">
                    <!-- cover picture milik game -->
                    <div class="uk-card-media-top">
                        <img loading="lazy" src="/img/story-posts/<?= htmlspecialchars($game['cover_img'], ENT_QUOTES, 'UTF-8'); ?>" alt="" width="100%" height="100%" uk-img style="border-radius: 10px;">
                    </div>

                    <div class="uk-card-body">

                        <h3 class="uk-card-title">
                            <?= htmlspecialchars($game['post_judul'], ENT_HTML5, 'UTF-8'); ?>
                        </h3>

                        <p uk-margin>
                            <?= htmlspecialchars($game['deskripsi_post'], ENT_HTML5, 'UTF-8'); ?>
                        </p>

                        <div class="uk-flex uk-flex-column" uk-margin>
                            <div class="uk-flex-wrap">
                                <div class="chip z-depth-2">
                                    <?= $game['post_genre_style'] ?>
                                    <?= htmlspecialchars($game['post_genre'], ENT_QUOTES, 'UTF-8'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="uk-card-footer uk-margin">
                            <a href="#" class="uk-button uk-button-text">Selengkapnya</a>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>






<?= $this->endSection(); ?>