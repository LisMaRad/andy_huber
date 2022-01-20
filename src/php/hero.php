<section id="hero">
    <?php 
        $quote = get_field( "quote" );
        $author = get_field("author");
    ?>
    <div>
        <h2><?php echo $quote ?></h2>
        <p><?php echo $author ?></p>
    </div>
    <?php the_post_thumbnail(); ?>
</section>