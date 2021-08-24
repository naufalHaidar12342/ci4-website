<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>



<div class="uk-container uk-margin-large">
    <div class="uk-text-center">
        <h3>About Us.</h3>
        <h3 class="uk-text-meta">Info tentang pengembang beserta teknologi yang digunakan dalam website ini.</h3>
        <div class="uk-text-uppercase uk-container" style="display:flex;justify-content:center;">
            <a href="#developers_section" class="uk-button uk-button-default uk-margin-left uk-margin-right" style="display:flex;align-items:center;">
                <i class="ri-github-fill" style="font-size: 24px;"></i>
                Developers
            </a>
            <a href="#technologies_section" class="uk-button uk-button-default uk-margin-left uk-margin-right" style="display:flex;align-items:center;">
                <i class="ri-github-fill" style="font-size: 24px;"></i>
                Technologies
            </a>
        </div>
    </div>
</div>

<!-- section milik developer -->
<div class="uk-container uk-margin-large" id="developers_section">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container" style="width: 200px;">
            <img src="/img/profiles/DSC_0491_heydar.JPG" width="100%" height="100%" alt="" uk-contain>

        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Left</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container" style="width: 200px; height: 300px;">
            <img src="/img/profiles/ardhayudhatama.jpeg" width="100%" height="100%" alt="" uk-cover>

        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Left</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
</div>

<div class="pink darken-2 white-text">
    <div class="uk-container">
        <div class="uk-height-large uk-grid-row-small" uk-grid>
            <div class="uk-column-1-2">
                <h2 class="uk-text-center uk-text-uppercase">Meet the Devs</h2>
                <p class="white-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit minima facilis veniam recusandae quos earum quod perspiciatis quibusdam vitae quasi quisquam, blanditiis magnam dolorem id, quam est nostrum, rerum quae.</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>