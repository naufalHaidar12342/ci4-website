<?= $this->extend('/layouts/all-page'); ?>

<?= $this->section('content'); ?>
<div class="uk-container uk-margin-large-top">
    <div class="uk-child-width-1-3@m" uk-grid>
        <?= $this->include('/layouts/walkthrough-collection/gta-v'); ?>
        <?= $this->include('/layouts/walkthrough-collection/gta-v'); ?>
        <?= $this->include('/layouts/walkthrough-collection/gta-v'); ?>
        <?= $this->include('/layouts/walkthrough-collection/gta-v'); ?>
        <?= $this->include('/layouts/walkthrough-collection/gta-v'); ?>
        <?= $this->include('/layouts/walkthrough-collection/gta-v'); ?>


    </div>

</div>
<?= $this->endSection(); ?>