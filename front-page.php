<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<!-- <h2>Front-page.php</h2> -->
<div id="entete" class="global  clr-agencement-primaire">
        <section class="entete__header">  
                        <!-- facebook -->

            <div class="entete__header__texte">    
                <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="bgc-text"><?php echo get_bloginfo('description'); ?></h2>
                <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
            </div>   
            <div class="entete__header__button"><a href="http://localhost:8080/4W4_wp/conference/">
                <button class="entete__button">Conférence sur le Mont Fuji</button>
            </a></div>
        </section>
<?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Destinations populaires</h2>
        <div class="section__carte">       
  <?php if (have_posts()):
        while(have_posts()): the_post(); 
            $ma_categorie = "carte";
            if(in_category('galerie')){
                $ma_categorie = "galerie";
            }
            get_template_part("gabarit/categorie", $ma_categorie);
            ?>
       <?php endwhile; ?>
    <?php endif; ?>
  </div>
        </section>
    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <div class="images">
                <?php echo do_shortcode('[carrousel]') ?>
            </div>
                <?php
				    // Appel du shortcode directement dans le fichier front-page.php
				    echo do_shortcode('[em_destination]');
				?>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Catégories</h2>
            <?php get_template_part("gabarit/categorie"); ?>
        </section>
<!--
    Avec wordpress dans le fichier front-page.php, je voudrais faire afficher des cartes de catégorie. Chacune des carte contiendrait: le nom de la catégorie,
    les 10 premiers mots de la description de la catégorie, le nombre d'article dans la catégorie et un lien vers une page category contenant une liste d'articles 
    de cette catégorie.  
-->
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php  get_footer(); ?>
    