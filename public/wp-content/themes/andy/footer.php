<footer>
<h1>Andy Huber</h1>
<nav><?php wp_nav_menu(array ('theme_location' => 'footer-menu')); ?></nav>

    <?php $social_query = new WP_Query('order=ASC&&category_name=social');
        if($social_query->have_posts()) : 
            while($social_query->have_posts()) : $social_query->the_post(); ?>
                <span><?php the_content(); ?></span>		
            <?php endwhile;	
        endif;		
    wp_reset_postdata();?>

</footer>
<?php wp_footer(); ?>
</body>

</html>