<?php
$panggilModel = new ('App\Models\DaftarGame_Model');
$tampilan_home = $panggilModel
    ->getWhere(['slug_game' => 'gta-v'])
    ->getResultArray();
?>

<?php foreach ($tampilan_home as $tampilan) : ?>
    <div>
        <div class="uk-card uk-card-hover uk-card-default uk-uk-border-rounded">
            <!-- cover picture milik game -->
            <div class="uk-card-media-top">
                <img src="/img/<?= $tampilan['cover_game']; ?>" alt="" width="100%" uk-img>
            </div>

            <div class="uk-card-body">
                <h3 class="uk-card-title">
                    <a href="" class="uk-button-link" rel="noreferrer" target="_blank">
                        Grand Theft Auto V
                    </a>
                </h3>

                <div class="uk-card-footer">
                    <a href="/kanal-game/<?= $tampilan['slug_game']; ?>" class="uk-button uk-button-text">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>