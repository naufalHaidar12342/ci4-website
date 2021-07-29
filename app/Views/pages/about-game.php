<?= $this->extend('/layouts/all-page'); ?>

<?= $this->section('content'); ?>

<h2 class="uk-text-center uk-text-uppercase uk-margin-botto"> Info tentang game </h2>

<div class="uk-container">
    <div class="uk-child-width-1-2@m" uk-grid>
        <div>
            <!-- Rogue Company -->
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="/img/Splash-roguecompany.webp" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Rogue Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <ul class="uk-list-disc">
                        <li>
                            <p>Publisher :Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </li>
                        <li>
                            <p>Developer :Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </li>
                        <li>
                            <p>Dirilis : , consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </li>
                    </ul>
                    <!-- bagian tags dari game/kategori game itu  -->
                    <div uk-margin>
                        Genre/Kategori :
                        <div class="chip">
                            <i class="ri-sword-fill"></i>
                            Action
                        </div>
                        <div class="chip">
                            <!-- <i class='bx bx-target-lock bx-burst'></i> -->
                            <i class='bx bx-target-lock'></i>
                            Shooter
                        </div>
                        <div class="chip">
                            <i class="ri-group-fill"></i>
                            Multiplayer
                        </div>
                        <div class="chip">
                            <i class="fas fa-hands-helping"></i>
                            Co-op
                        </div>
                    </div>

                    <p uk-margin>
                        <a href="https://store.steampowered.com/app/872200/Rogue_Company/" class="uk-button uk-margin-right light-blue darken-2 waves-effect waves-light" style="color:white;">
                            <i class="fab fa-steam"></i>
                            Steam
                        </a>
                        <a href="https://www.epicgames.com/store/en-US/p/rogue-company/" class="uk-button waves-effect waves-light" style="color:white; background-color: #2a2a2a;">
                            <i class="fab fa-steam"></i>
                            Epic Games Store
                        </a>
                    </p>

                </div>


            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="/img/SplashScreen_TheCycle.png" alt="">
                </div>

                <div class="uk-card-body">
                    <h3 class="uk-card-title">The Cycle</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <ul class="uk-list-disc">
                        <li>
                            <p>Publisher :Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </li>
                        <li>
                            <p>Developer :Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </li>
                        <li>
                            <p>Dirilis : , consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </li>
                    </ul>
                    <!-- bagian tags dari game/kategori game itu  -->
                    <div uk-margin>
                        Genre/Kategori :
                        <div class="chip">
                            <i class="ri-sword-fill"></i>
                            Action
                        </div>
                        <div class="chip">
                            <!-- <i class='bx bx-target-lock bx-burst'></i> -->
                            <i class='bx bx-target-lock'></i>
                            Shooter
                        </div>
                        <div class="chip">
                            <i class="ri-group-fill"></i>
                            Multiplayer
                        </div>
                        <div class="chip">
                            <i class="fas fa-hands-helping"></i>
                            Co-op
                        </div>
                        <div class="chip">
                            <i class="fas fa-hands-helping"></i>
                            Survival
                        </div>
                    </div>
                    <p uk-margin>
                        <a href="" class="uk-button light-blue darken-2 waves-effect waves-light" style="color:white;">
                            <i class="fab fa-steam"></i>
                            Epic Games Store
                        </a>
                        <a href="" class="uk-button light-blue darken-2 waves-effect waves-light" style="color:white;">
                            <i class="fab fa-steam"></i>
                            Epic Games Store
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="uk-child-width-1-2@m" uk-grid>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="/img/Splash-roguecompany.webp" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Top</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Bottom</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="uk-card-media-top">
                    <img src="/img/SplashScreen_TheCycle.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>






<?= $this->endSection(); ?>