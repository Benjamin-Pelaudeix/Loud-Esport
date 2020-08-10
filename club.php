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
        <h1 class="title">Le club</h1>
        <p class="infos">Loud Esport est une association e-sportive créée en Juin 2018 ayant pour but d'accompagner les jeunes pandas dans leur carrière de joueur compétitif. Actuellement, nous développons 3 sections : FIFA, Hearthstone et Trackmania !</p>
        <h1 class="title">Découvrez nos recrues</h1>
        <div class="buttons">
            <a href="./team.php" class="button"><i class="fas fa-users"></i> Découvrir</a>
        </div>
        <h1 class="title">Notre staff</h1>
        <div class="players">
            <div class="player">
                <div class="player-infos">
                    <p class="player-name">Nooper</p>
                    <p class="player-role">Président</p>
                </div>
                <a href="https://twitter.com/Loud_Nooper"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="player">
                <div class="player-infos">
                    <p class="player-name">Yato</p>
                    <p class="player-role">Vice-Président</p>
                </div>
                <a href="https://twitter.com/Yato_FTN"><i class="fab fa-twitter"></i></a>
                <a href="https://www.twitch.tv/salty_yato"><i class="fab fa-twitch"></i></a>
            </div>
            <div class="player">
                <div class="player-infos">
                    <p class="player-name">Mastou</p>
                    <p class="player-role">Resp. Développement</p>
                </div>
                <a href="https://twitter.com/Loud_MasTou"><i class="fab fa-twitter"></i></a>
                <a href="https://twitch.tv/MasTou"><i class="fab fa-twitch"></i></a>
            </div>
            <div class="player">
                <div class="player-infos">
                    <p class="player-name">Ben</p>
                    <p class="player-role">Resp. Développement</p>
                </div>
                <a href="https://twitter.com/Loud_BenP"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="player">
                <div class="player-infos">
                    <p class="player-name">Alkyrow</p>
                    <p class="player-role">Community Manager</p>
                </div>
                <a href="https://twitter.com/Eden_Alkyrow"><i class="fab fa-twitter"></i></a>
                <a href="https://twitch.tv/Alkyrow"><i class="fab fa-twitch"></i></a>
            </div>
            <div class="player">
                <div class="player-infos">
                    <p class="player-name">Crodaliox</p>
                    <p class="player-role">Resp. Événementiel</p>
                </div>
                <a href="https://twitter.com/Crodaliox"><i class="fab fa-twitter"></i></a>
                <a href="https://twitch.tv/CrodalioxTM"><i class="fab fa-twitch"></i></a>
                <a href="https://www.youtube.com/channel/UCri_dbM2cHDzoCoQ7DR-4Ng"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <h1 class="title">Nos partenaires</h1>
        <p class="infos">Afin de permettre à nos jeunes pandas de s'épanouir, certaines marques ont rejoint nos rangs et nous aident au quotidien. Un grand MERCI à eux !</p>
        <div class="products">
            <div class="product-card">
                <img src="./images/synhostinger.jpg" alt="">
                <h2>Synhostinger</h2>
                <p class="product-info">Synhostinger est une entreprise française proposant des solutions d'hébergements pour site Web ou serveurs privés virtuels (VPS) avec des tarifs défiant toutes concurrences.<br>Faites un tour sur leur site pour découvrir leurs produits, et rejoignez leur Discord !</p>
                <div class="buttons">
                    <a href="https://www.synhostinger.com/accueil" class="button"><i class="fas fa-globe"></i> Site Web</a>
                    <a href="https://discord.gg/MMBWqDM" class="button"><i class="fab fa-discord"></i> Discord</a>
                </div>
            </div>
            <div class="product-card">
                <i class="fas fa-handshake" id="image"></i>
                <h2>Devenir partenaire</h2>
                <p class="product-info">Vous pouvez, en nous contactant, devenir un nouveau partenaire de notre association ! De ce fait, vous pourrez profiter d'une visibilité maximale grâce à nos réseaux sociaux fort de +3000 followers. De plus, vous profiterez de grilles tarifaires faites pour vous, suivant la mise en avant souhaitée.<br> N'attendez plus, rejoignez-nous !</p>
                <div class="buttons">
                    <a href="./documents/Dossier_sponsoring_fr.pdf" class="button"><i class="fas fa-folder-open"></i> Dossier</a>
                    <a href="mailto:loudesport@gmail.com" class="button"><i class="fas fa-envelope"></i> Contact</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('./php/footer.php') ?>
    <?php include('./php/nav-mobile.php') ?>
    <script src="./js/footer.js"></script>
</body>
</html>