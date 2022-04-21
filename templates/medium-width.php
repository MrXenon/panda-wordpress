<?php /* Template Name: Medium Width */ ?>

<?php get_header(); ?>

<div id="content">
<div class="container">
    <!-- Laadt de berichten in -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="block">
    <!-- Geeft de titel van een bericht weer -->
    <h2><?php the_title(); ?></h2>
    
    <!-- Geeft de content van een bericht weer -->
    <?php the_content(); ?>
    </div>
    
    <?php endwhile; else: // Insert any content or load a template for no posts found. 
    endif; 
    wp_reset_query();
?>
</div>
</div>

<!-- Image of location/map -->
<?php get_footer(); ?>
