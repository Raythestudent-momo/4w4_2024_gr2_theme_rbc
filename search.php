<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<!-- <h2>search.php</h2> -->
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Résultats de la recherche</h2>
        <div class="section__carte">       
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h4><?php the_title() ?></h4>
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
            <p><a href="<?php echo get_permalink(); ?>">La suite</a> </p>
            <?php the_category(); ?>
        </div>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>
        </section>
    </div>
    <?php  get_footer(); ?>   