<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.5" />

<title>Andy Huber</title>

<script type="module">
document.documentElement.classList.remove('no-js'); document.documentElement.classList.add('js')
</script>
<script src="js/script.js"></script>
<script src="js/toggle.js"></script>

<link rel="stylesheet" href="sass/style.css" />
<link href="dist/hamburgers.css" rel="stylesheet">


<meta name="description"
content="Sie wollen eine neue Website, dann sind Sie hier genau richtig. Alex Mayr designed Ihre Homepage" />
<meta property="og:title" content="Alex Mayer - Webdesign" />
<meta property="og:description"
content="Sie wollen eine neue Website, dann sind Sie hier genau richtig. Alex Mayr designed Ihre Homepage" />
<meta property="og:image" content="https://www.alexmayer.com/assets/logo.png" />
<meta property="og:image:alt" content="Logo von Alex Mayer" />
<meta property="og:locale" content="de_AT" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary" />
<meta property="og:url" content="https://www.alexmayer.com" />
<link rel="canonical" href="https://www.alexmayer.com" />

<link rel="icon" href="assets/favicon.ico" />
<link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="assets/apple-touch-icon.png" />
<link rel="manifest" href="assets/my.webmanifest" />
<link href="../node_modules/hamburgers/dist/hamburgers.css" rel="stylesheet">
<meta name="theme-color" content="#009ee3" />
<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>

<script>
function showtext(id){
    document.getElementById(id).classList.toggle('toggle-menu');
}
</script>

<header>
        <a href="index.php"><h1>Andy Huber</h1></a>
        <nav class="screen-menu"><?php wp_nav_menu(array ('theme_location' => 'main-menu')); ?></nav>
        
        <div class="burger-menu">
            <span onclick="showtext('menu')" ><img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="water glas"></span>
            <div id="menu" class="toggle-menu">
                <nav class="mobile-menu"><?php wp_nav_menu(array ('theme_location' => 'main-menu')); ?></nav>
            </div>
        </div>
    </header>
