<?= $this->extend('/layouts/all-page'); ?>

<?= $this->section('content'); ?>

<?php
$callModel = new ('App\Models\PostsModel');
$selectGame = $callModel->findAll();
?>

<div class="uk-container uk-margin-large">
    <div class="uk-child-width-1-2@m" uk-grid>
        <?php foreach ($selectGame as $download) : ?>
            <div>
                <!-- card untuk tiap game-->
                <div class="uk-card uk-card-hover uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="/img/story-posts/<?= htmlspecialchars($download['cover_img'], ENT_QUOTES, 'UTF-8'); ?>" style="border-radius: 10px;" alt="" height="100%" width="100%" uk-img>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">
                            <a href="<?= htmlspecialchars($download['link_rilis_game'], ENT_HTML5, 'UTF-8'); ?>" class="uk-button-link" target="_blank" rel="noreferrer">
                                <?= htmlspecialchars($download['post_judul'], ENT_HTML5, 'UTF-8'); ?>
                            </a>

                        </h3>
                        <p></p>
                        <ul class="uk-list-disc">
                            <li>
                                <p>Publisher :
                                    <a href="<?= htmlspecialchars($download['publisher_link'], ENT_HTML5, 'UTF-8'); ?>" class="uk-button-text uk-button-link uk-border-rounded" target="_blank" rel="noreferrer">
                                        <?= htmlspecialchars($download['post_publisher'], ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Developer :
                                    <a href="<?= htmlspecialchars($download['developer_link'], ENT_HTML5, 'UTF-8'); ?>" class="uk-button-text uk-button-link uk-border-rounded" target="_blank" rel="noreferrer">
                                        <?= htmlspecialchars($download['post_developer'], ENT_HTML5, 'UTF-8'); ?>
                                    </a>

                                </p>
                            </li>
                            <li>
                                <p>Dirilis :
                                    <a href="<?= htmlspecialchars($download['link_rilis_game'], ENT_HTML5, 'UTF-8'); ?>" target="_blank" rel="noreferrer" class="uk-button-text uk-button-link uk-border-rounded">
                                        <?= htmlspecialchars($download['tahun_rilis_game'], ENT_HTML5, 'UTF-8'); ?>
                                    </a>
                                </p>
                            </li>
                        </ul>
                        <!-- bagian tags dari game/kategori game itu  -->
                        <div uk-margin class="uk-flex uk-flex-column">
                            <div>
                                Genre/Kategori :
                            </div>
                            <div class="uk-flex-wrap">
                                <div class="chip z-depth-2">
                                    <?= $download['post_genre_style']; ?>
                                    <?= htmlspecialchars($download['post_genre'], ENT_HTML5, 'UTF-8'); ?>
                                </div>
                            </div>
                        </div>

                        <p uk-margin>


                            <?php if ($download['steam'] !== '') : ?>
                                <a href="<?= htmlspecialchars($download['steam'], ENT_HTML5, 'UTF-8'); ?>" class="uk-button uk-margin-right uk-box-shadow-medium light-blue darken-2 waves-effect" target="_blank" rel="noreferrer" style=" color: white; border-radius: 16px;text-decoration:none;">
                                    <i class="fab fa-steam"></i>
                                    Steam
                                </a>
                            <?php endif; ?>
                            <?php if ($download['epicgames_store'] !== '') : ?>
                                <a href="<?= htmlspecialchars($download['epicgames_store'], ENT_HTML5, 'UTF-8'); ?>" class="uk-button waves-effect waves-light " target="_blank" rel="noreferrer" style=" color: white; background-color: #2a2a2a; border-radius: 16px; text-decoration: none;">
                                    <img src="/img/epic_logo_filled_white.png" alt="Epic Game Logo" width="24" height="24">
                                    Epic Games Store
                                </a>
                            <?php endif; ?>

                        </p>

                    </div>


                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>






<?= $this->endSection(); ?>