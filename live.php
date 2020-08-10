<!DOCTYPE html>
<html lang="en">
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
    <div id="twitch-embed"></div>
    <?php include('./php/footer.php') ?>
    <?php include('./php/nav-mobile') ?>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script src="./js/twitch.js"></script>
    <script src="./js/footer.js"></script>
</body>
</html>