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
            <div class="entete__header__button"><button class="entete__button">Événements</button></div>
        </section>
<?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Destinations populaires</h2>
        <div class="section__carte">       
  <?php if (have_posts()):
        while(have_posts()): the_post(); ?>
        <div class="carte">
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
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie  (h2)</h2>
            <p>Lorem ipsum dolor sit amet,<a href="#">Lorem, ipsum.</a>  consectetur adipisicing elit. Minima <a href="#">Lorem, ipsum.</a>  velit qui unde odit quae, magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
            <blockquote>Galerie ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
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
<!--
    Avec wordpress dans le fichier front-page.php, je voudrais faire afficher des cartes de catégorie. Chacune des carte contiendrait: le nom de la catégorie,
    les 10 premiers mots de la description de la catégorie, le nombre d'article dans la catégorie et un lien vers une page category contenant une liste d'articles 
    de cette catégorie.  
-->
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php  get_footer(); ?>
    