<!-- Phasmophobia -->
<div id="phasmophobia">
    <div class="uk-card uk-card-hover uk-card-default" style="border-radius: 10px;">
        <div class="uk-card-media-top">
            <img src="/img/phasmophobia-title-10-21-2020.webp" style="border-radius: 5px;" alt="" height="" width="100%" uk-img>
        </div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">
                <a href="https://kineticgames.co.uk/" class="uk-button-link" target="_blank" rel="noreferrer">
                    Phasmophobia
                </a>

            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            <ul class="uk-list-disc">
                <li>
                    <p>Publisher :
                        <a href="https://kineticgames.co.uk/" class="uk-button-text uk-button-link uk-border-rounded" rel="noreferrer" target="_blank">Kinetic Games</a>
                    </p>
                </li>
                <li>
                    <p>Developer :
                        <a href="https://kineticgames.co.uk/" class="uk-button-text uk-button-link uk-border-rounded" rel="noreferrer" target="_blank">Kinetic Games</a>
                    </p>
                </li>
                <li>
                    <p>Dirilis :
                        <a href="https://www.youtube.com/watch?v=sRa9oeo5KiY" class="uk-button-text uk-button-link uk-border-rounded" rel="noreferrer" target="_blank">
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
                    <?= $this->include('/layouts/genre-collection/horror'); ?>
                    <?= $this->include('/layouts/genre-collection/multi-player'); ?>
                    <?= $this->include('/layouts/genre-collection/co-op'); ?>
                </div>
            </div>
            <p uk-margin>
                <a href="https://store.steampowered.com/app/739630/Phasmophobia/" class="uk-button uk-margin-right light-blue darken-2 waves-effect waves-light" style="color: white; border-radius: 16px; text-decoration:none;" rel="noreferrer" target="_blank">
                    <i class="fab fa-steam"></i>
                    Steam
                </a>
            </p>
        </div>
    </div>
</div>