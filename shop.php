<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loud Esport</title>
    <link rel="shortcut icon" href="./images/logo_emote.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/e5e7c64170.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('./php/header.php') ?>
    <div class="container">
        <h1 class="title">La boutique</h1>
        <p>Si vous souhaitez nous soutenir et porter nos couleurs, nous vous proposons notre gamme de produit en partenariat avec <a href="#">LMN8</a></p>
        <div class="products">
            <div class="product-card">
                <img src="./images/Maillot_loud-01.png" alt="Maillot 2019-2020">
                <h2>Maillot Officiel 2019-2020</h2>
                <p class="product-info">35.00 €</p>
                <a href="https://eliminate.fr/product/loud-esport-player-jersey/" class="button"><i class="fas fa-shopping-cart"></i> Commander</a>
            </div>
            <div class="product-card" id="new">
                <img src="./images/Maillot_loud-01.png" alt="Maillot 2019-2020">
                <h2>Bientôt disponible</h2>
                <p class="product-info">Sortie en Septembre</p>
                <a href="#" class="button" id="wait-btn"><i class="fas fa-clock"></i> Patienter</a>
            </div>
        </div>
    </div>
    <?php include('./php/footer.php') ?>
    <script src="./js/shop.js"></script>
</body>
</html>