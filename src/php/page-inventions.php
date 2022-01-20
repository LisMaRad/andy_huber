<!-- the main part of the success stories page -->
<?php 
include "header.php";
include "hero.php";
?>

<h2><?php the_title(); ?></h2>

<section id="inventionsPage">

<?php
$context = Timber::get_context();
$context['posts'] = Timber::get_posts('order=ASC&&category_name=inventions');
Timber::render('/timber/inventions.twig', $context);
?>
</section>

<section id="myPatents">
<h2>My Patents</h2>
<ul>
<?php
$context = Timber::get_context();
$context['patents'] = Timber::get_posts('order=ASC&&category_name=patents');
Timber::render('/timber/patents.twig', $context);
?>
</ul>
</section>

<?php include "footer.php"; ?>