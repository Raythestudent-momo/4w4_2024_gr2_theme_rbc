<?php 
/**
 *  Modèle de base pour l'affichage d'une liste d'article d'une certaine catégorie
 */
?>

<?php get_header(); ?>
<!-- <h2>category</h2> -->
<div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Catégorie</h2>
        <div class="section__carte">  
 <?php

  ?>      
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h4><?php the_title() ?></h4>
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
            <p><a href="<?php echo get_permalink(); ?>">La suite</a> </p>
        </div>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>

    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <div class="images">
                <p>Galerie d'images en construction</p>
            </div>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
        <h2>Catégories</h2>
            <div class="section__carte">
            <?php
                $categories = get_categories();

                foreach ($categories as $category) {
                    $category_link = get_category_link($category->term_id);
                    $description = wp_trim_words($category->description, 10, '...');
                    ?>

                    <div class="carte">
                        <h2><a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a></h2>
                        <p><?php echo $description; ?></p>
                        <p><?php echo $category->count . ' articles'; ?></p>
                        <a href="<?php echo esc_url($category_link); ?>">Voir la catégorie</a>
                    </div>
            <?php
            }
            ?>
            </div>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php  get_footer(); ?>
    