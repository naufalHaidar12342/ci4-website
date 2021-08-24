<?= $this->extend('/layouts/all-page'); ?>
<?= $this->section('content'); ?>
<div class="uk-container uk-margin-large-top">
    <div class="uk-child-width-1-3@m">

        <div>
            <!-- Judul Gamenya -->
            <div class="uk-card uk-card-hover uk-card-default uk-border-rounded">
                <div class="uk-card-media-top">
                    <img src="/img/nama-cover-gamenya" alt="" height="" width="100%" uk-img>
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">
                        <a href="https://www.roguecompany.com/" class="uk-button-link" target="_blank" rel="noreferrer">Judul Gamenya</a>
                    </h3>
                    <p>Penjelasan singkat mengenai gamenya, isi disini</p>
                    <ul class="uk-list-disc">
                        <li>
                            <p>Publisher :
                                <a href="" class="uk-button-text uk-button-link uk-border-rounded" target="_blank" rel="noreferrer">
                                    Nama publishernya
                                </a>
                            </p>
                        </li>
                        <li>
                            <p>
                                Developer :
                                <a href="https://www.playfirstwatch.com/" class="uk-button-text uk-button-link uk-border-rounded" target="_blank" rel="noreferrer">
                                    Nama developernya
                                </a>

                            </p>
                        </li>
                        <li>
                            <p>Dirilis :
                                <a href="https://www.youtube.com/watch?v=uqu8jtrNR_0" target="_blank" rel="noreferrer" class="uk-button-text uk-button-link uk-border-rounded">
                                    tahun terbitnya
                                </a>
                            </p>
                        </li>
                    </ul>
                    <!-- badge yang mewakili tags dari game/kategori game itu  -->
                    <div class="uk-card-badge uk-label">
                        <i class=" ri-sword-fill"></i>
                        Label
                    </div>

                    <p uk-margin class="uk-text-center">
                        <a href="" class="uk-button uk-margin-right uk-box-shadow-medium light-blue darken-2 waves-effect waves-light " style="color:white;" target="_blank" rel="noreferrer">
                            <i class="fab fa-steam"></i>
                            Steam
                        </a>
                        <a href="" class="uk-button waves-effect waves-light" style="color:white; background-color: #2a2a2a;" target="_blank" rel="noreferrer">
                            <img src="/img/epic_logo_filled_white.png" alt="Epic Game Logo" width="14" height="14">
                            Epic Games Store
                        </a>
                    </p>

                </div>


            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>