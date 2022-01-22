<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.5" />

<title>Andy Huber</title>

<script type="module">
document.documentElement.classList.remove('no-js'); document.documentElement.classList.add('js')
</script>

<!-- <link rel="stylesheet" href="sass/style.css" /> -->
<link rel="apple-touch-icon" sizes="180x180" href="./wp-content/themes/andy/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./wp-content/themes/andy/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./wp-content/themes/andy/favicon-16x16.png">
<link rel="manifest" href="./wp-content/themes/andy/site.webmanifest">

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
