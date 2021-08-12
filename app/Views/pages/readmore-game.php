<?= $this->extend('/layouts/all-page'); ?>

<?= $this->section('content'); ?>
<div>
    <div class="uk-card uk-card-hover uk-card-default uk-uk-border-rounded">
        <!-- cover picture milik game -->
        <div class="uk-card-media-top">
            <img src="/img/<?= $videogame['cover_game']; ?>" alt="" width="100%" uk-img>
        </div>

        <div class="uk-card-body">
            <h3 class="uk-card-title">
                <a href="" class="uk-button-link" rel="noreferrer" target="_blank">
                    <?= $videogame['judul_game']; ?>
                </a>
            </h3>

            <div class="uk-card-footer">
                <a href="/kanal-game/<?= $component['slug_game']; ?>" class="uk-button uk-button-text">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>