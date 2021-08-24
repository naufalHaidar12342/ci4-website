<nav uk-sticky>
    <div class="nav-wrapper" style="height: 66px !important;">
        <!-- hamburger menu untuk mobile device -->
        <a class="uk-button uk-hidden@m waves-effect waves-light" style="text-decoration: none; background-color: rgb(112, 128, 144, 0.15);" uk-toggle="target: #offcanvas-reveal">
            <i class="material-icons">
                menu
            </i>
        </a>

        <!-- brand logo/nama website -->
        <a href="<?= base_url(); ?>/" class="brand-logo kanal-game uk-margin-small-left" style="font-family: 'Press Start 2P', cursive; text-transform: uppercase;letter-spacing: 2px; font-size: 20px; color: inherit; text-decoration: none;  vertical-align: middle !important; text-align: center !important;">
            KanalGame
            <i class="material-icons md-24 right hide-on-med-and-down">
                sports_esports
            </i>

        </a>

        <ul class="right hide-on-med-and-down" style="font-family: 'Barlow Condensed', sans-serif; letter-spacing:4px;">
            <li>
                <a href="<?= base_url(); ?>/" class="waves-effect" style="text-transform: uppercase; color:inherit; text-decoration:none;">
                    Game
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>/kanal-game/download" class="waves-effect" style="text-transform: uppercase; color:inherit; text-decoration:none;">
                    Downloads
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>/kanal-game/suggest" class="waves-effect" style="text-transform: uppercase; color:inherit; text-decoration:none;">
                    Suggest
                </a>
            </li>
            <li>
                <a href="<?= base_url(); ?>/kanal-game/about-us" class="waves-effect" style="text-transform: uppercase; color:inherit; text-decoration:none;">
                    About
                </a>
            </li>
        </ul>

    </div>

</nav>