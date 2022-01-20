<?php include "header.php"; ?>

<main>
<section id="hero-frontpage">
    <?php
        $context = Timber::get_context();
        $context['posts'] = Timber::get_posts('order=ASC&&category_name=front-page');
        Timber::render('/timber/front-page.twig', $context);
    ?>
</section>

<section id="success-stories">
    <?php
        $context = Timber::get_context();
        $context['posts'] = Timber::get_posts('order=ASC&&category_name=front-success-stories');
        Timber::render('/timber/front-success-stories.twig', $context);
    ?>
</section>

<section id="organisation">
    <?php
        $context = Timber::get_context();
        $context['posts'] = Timber::get_posts('order=ASC&&category_name=front-organisation');
        Timber::render('/timber/front-organisation.twig', $context);
    ?>
</section>

<section id="inventions">
    <?php
        $context = Timber::get_context();
        $context['posts'] = Timber::get_posts('order=ASC&&category_name=front-inventions');
        Timber::render('/timber/front-inventions.twig', $context);
    ?>
</section>

<section id="quote">
    <?php
        $context = Timber::get_context();
        $context['posts'] = Timber::get_posts('order=ASC&&category_name=front-quote');
        Timber::render('/timber/front-quote.twig', $context);
    ?>
</section>

</main>

<?php include "footer.php"; ?>
