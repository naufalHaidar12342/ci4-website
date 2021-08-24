<div>
    <!-- The Cycle -->
    <div class="uk-card uk-card-hover uk-card-default" style="border-radius: 10px;">
        <div class="uk-card-media-top">
            <img src="/img/SplashScreen_TheCycle.webp" style="border-radius: 5px;" alt="" width="100%" height="" uk-img>
        </div>

        <div class="uk-card-body">
            <h3 class="uk-card-title">
                <a href="https://thecycle.game/" class="uk-button-link" target="_blank" rel="noreferrer">The Cycle</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            <ul class="uk-list-disc">
                <li>
                    <p>Publisher :
                        <a href="https://www.yager.de/" class="uk-button-text uk-button-link uk-border-rounded" rel="noreferrer" target="_blank">
                            YAGER
                        </a>
                    </p>
                </li>
                <li>
                    <p>Developer :
                        <a href="https://www.yager.de/" class="uk-button-text uk-button-link uk-border-rounded" rel="noreferrer" target="_blank">YAGER</a>
                    </p>
                </li>
                <li>
                    <p>Dirilis :
                        <a href="https://www.youtube.com/watch?v=icxjNGxpNXQ" class="uk-button-link uk-button-text" rel="noreferrer" target="_blank"></a>
                        2019
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
                    <?= $this->include('/layouts/genre-collection/survival'); ?>
                </div>
            </div>
            <p uk-margin>
                <a href="https://store.steampowered.com/app/868270/The_Cycle/" class="uk-button uk-margin-right light-blue darken-2 waves-effect waves-light" style="color: white; border-radius: 16px; text-decoration:none;" target="_blank" rel="noreferrer">
                    <i class="fab fa-steam"></i>
                    Steam
                </a>
                <a href="https://www.epicgames.com/store/en-US/p/thecycle" target="_blank" rel="noreferrer" class="uk-button waves-effect waves-light" style="color: white; background-color: #2a2a2a; border-radius: 16px; text-decoration: none;">
                    <img src="/img/epic_logo_filled_white.png" alt="Epic Game Logo" width="24" height="24">
                    Epic Games Store
                </a>
            </p>
        </div>

    </div>
</div>