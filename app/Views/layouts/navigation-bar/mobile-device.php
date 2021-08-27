<!-- navbar mobile -->
<div id="offcanvas-reveal" uk-offcanvas=" mode:reveal; overlay: true">
    <div class="uk-offcanvas-bar" style="background-color:#3a4856; border-radius: 0px 0px 0px 0px;">
        <!-- tombol close -->
        <a class=" uk-offcanvas-close waves-effect" type="button" uk-close style="text-decoration: none;"></a>

        <div class="uk-nav uk-nav-default ">
            <ul style="font-family: 'Barlow Condensed', sans-serif; letter-spacing:4px; font-size:16px;">
                <li class="uk-nav-header uk-margin" style="margin-top:2rem !important;">
                    <a href="#" class="btn-floating btn-large pulse" style="background-color: #8dafce;">
                        <img src="/img/sports_esports_white_48dp.svg" alt="" width="100%" height="100%" uk-img>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>/" style="color:inherit;" class="uk-margin-medium uk-button-text uk-margin-medium-left uk-margin-medium-right waves-effect waves-light">
                        Game
                        <i class="bi bi-joystick" style="margin-left:4px;"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>/kanal-game/download" style="color:inherit;" class="uk-margin-medium uk-button-text uk-margin-medium-left uk-margin-medium-right waves-effect waves-light">
                        Downloads
                        <i class="fas fa-download" style="margin-left:4px;"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>/kanal-game/suggest" style="color:inherit;" class="uk-margin-medium uk-margin-medium-left uk-margin-medium-right uk-button-text ">
                        Suggest
                        <i class="far fa-envelope" style="margin-left:4px;"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>/kanal-game/about-us" style="color:inherit;" class="uk-margin-medium uk-margin-medium-left uk-margin-medium-right uk-button-text ">
                        About
                        <i class="fas fa-address-card" style="margin-left:4px;"></i>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</div>