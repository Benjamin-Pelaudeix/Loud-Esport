<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez la maison de nos jeunes pandas roux prêts au combat !">
    <title>Loud Esport</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/logo_emote.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e5e7c64170.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('./php/header.php') ?>
    <div class="home">
        <div class="panel">
            <div class="tab large" id="shop">
            <img src="./images/Maillot_loud-01.png" alt="Maillot">
            <p class="tab-title">Portez nos couleurs</p>
                <a href="https://eliminate.fr/product-category/loud-esport/" target="_blank" rel="nofollow noopener noreferrer">
                    <div class="button">
                        <p><i class="fas fa-shopping-cart"></i> Commander</p>
                    </div>
                </a>
            </div>
            <div class="tab small">
                <p class="tab-title">Notre actualité</p>
                <a class="button" href="https://twitter.com/EsportLoud" data-size="large" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-twitter"></i> Suivre</a>
                <a href="https://discord.gg/YPXdEEy" class="button" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-discord"></i> Rejoindre</a>
            </div>
            <div class="tab medium">
                <p class="tab-title">Nos directs</p>
                <p id="status"></p>
                <div class="buttons">
                    <a href="https://www.twitch.tv/loudesporttv" class="button" id="follow" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-user-plus"></i> Suivre</a>
                    <a href="./live.php" class="button" id="join"><i class="fas fa-play"></i> Rejoindre</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('./php/footer.php') ?>
    <?php include('./php/nav-mobile.php') ?>
    <script src="./js/index.js"></script>
    <script src="./js/footer.js"></script>
</body>
</html>