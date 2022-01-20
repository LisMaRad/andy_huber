<?php include "header.php"; ?>

<?php include "hero.php"; ?>

<h2><?php the_title(); ?></h2>

<section id="contact">
    <?php
        $context = Timber::get_context();
        // $context['posts'] = Timber::get_posts('order=ASC&&category_name=contact');
        Timber::render('/timber/contact.twig', $context);
    ?>
</section>

<?php include "footer.php"; ?>