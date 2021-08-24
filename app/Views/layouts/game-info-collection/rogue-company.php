<div>
    <!-- Rogue Company -->
    <div class="uk-card uk-card-hover uk-card-default " style="border-radius: 10px;">
        <div class="uk-card-media-top">
            <img src="/img/Splash-roguecompany.webp" style="border-radius: 5px;" alt="" height="" width="100%" uk-img>
        </div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">
                <a href="https://www.roguecompany.com/" class="uk-button-link" target="_blank" rel="noreferrer">Rogue Company</a>

            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            <ul class="uk-list-disc">
                <li>
                    <p>Publisher :
                        <a href="https://www.hirezstudios.com/" class="uk-button-text uk-button-link uk-border-rounded" target="_blank" rel="noreferrer">
                            Hi-Rez Studio
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        Developer :
                        <a href="https://www.playfirstwatch.com/" class="uk-button-text uk-button-link uk-border-rounded" target="_blank" rel="noreferrer">
                            First Watch Games
                        </a>

                    </p>
                </li>
                <li>
                    <p>Dirilis :
                        <a href="https://www.youtube.com/watch?v=uqu8jtrNR_0" target="_blank" rel="noreferrer" class="uk-button-text uk-button-link uk-border-rounded">
                            2020
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
                    <?= $this->include('/layouts/genre-collection/action'); ?>
                    <?= $this->include('/layouts/genre-collection/shooter'); ?>
                    <?= $this->include('/layouts/genre-collection/multi-player'); ?>
                    <?= $this->include('/layouts/genre-collection/co-op'); ?>
                </div>
            </div>

            <p uk-margin>
                <a href="https://store.steampowered.com/app/872200/Rogue_Company/" class="uk-button uk-margin-right uk-box-shadow-medium light-blue darken-2 waves-effect" target="_blank" rel="noreferrer" style=" color: white; border-radius: 16px;text-decoration:none;">
                    <i class="fab fa-steam"></i>
                    Steam
                </a>
                <a href="https://www.epicgames.com/store/en-US/p/rogue-company/" class="uk-button waves-effect waves-light " target="_blank" rel="noreferrer" style=" color: white; background-color: #2a2a2a; border-radius: 16px; text-decoration: none;">
                    <img src="/img/epic_logo_filled_white.png" alt="Epic Game Logo" width="24" height="24">
                    Epic Games Store
                </a>
            </p>

        </div>


    </div>
</div>