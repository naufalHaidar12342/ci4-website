<?= $this->extend('/layouts/all-page'); ?>

<?= $this->section('content'); ?>

<h2 class="uk-text-center uk-text-uppercase" style="margin-bottom: 2.5rem !important; "> Info tentang game </h2>

<div class="uk-container" style="margin-bottom: 2.5rem !important;">
    <div class=" uk-child-width-1-2@m" uk-grid>
        <?= $this->include('/layouts/game-collection/rogue-company'); ?>
        <?= $this->include('/layouts/game-collection/the-cycle'); ?>
    </div>
    <div class="uk-child-width-1-2@m" uk-grid>
        <?= $this->include('/layouts/game-collection/phasmophobia'); ?>
        <?= $this->include('/layouts/game-collection/world-war-z'); ?>

    </div>
</div>






<?= $this->endSection(); ?>