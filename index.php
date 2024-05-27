<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<!-- <h2>index.php</h2> -->
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Destinations populaires</h2>
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
<!--
    Avec wordpress dans le fichier front-page.php, je voudrais faire afficher des cartes de catégorie. Chacune des carte contiendrait: le nom de la catégorie,
    les 10 premiers mots de la description de la catégorie, le nombre d'article dans la catégorie et un lien vers une page category contenant une liste d'articles 
    de cette catégorie.  
-->

    <?php  get_footer(); ?>
    