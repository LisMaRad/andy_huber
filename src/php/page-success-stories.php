<!-- the main part of the success stories page -->
<?php include "header.php"; ?>

<?php include "hero.php"; ?>

<h2><?php the_title(); ?></h2>

<section id="storiesBanner">

<?php
$context = Timber::get_context();
$context['posts'] = Timber::get_posts('order=ASC&&category_name=success-stories&&posts_per_page=3');
Timber::render('/timber/success-stories-banner.twig', $context);
?>

</section>

<section id="storyField">
<?php
$stories = Timber::get_context();
$stories['stories'] = Timber::get_posts('order=ASC&&category_name=success-stories');
Timber::render('/timber/success-stories.twig', $stories);
?>





<!-- <?php $hero_query = new WP_Query('order=ASC&&category_name=success-stories');
if($hero_query->have_posts()) :  
    while($hero_query->have_posts()) : $hero_query->the_post(); ?>
    <?php $id = "item".get_the_ID(); ?>
    <div class="storyPicRight" id="<?php echo $id ?>">
    <div class="textStory">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    </div>
    <div class="storyPic">
    <?php the_post_thumbnail(); ?>
    </div>
    </div>
    <div class="storyPicLeft" id="item2">
    <div class="textStory">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    </div>
    <div class="storyPic">
    <?php the_post_thumbnail(); ?>
    </div>
    </div>
    
    <?php endwhile;	
endif;		
wp_reset_postdata();?> -->


</section>

<?php include "footer.php"; ?>
