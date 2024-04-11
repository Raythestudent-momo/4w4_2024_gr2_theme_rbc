<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<!-- <h2>index.php</h2> -->
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h1>Erreur 404</h1>
            <h3>Vous essayez d'accéder à une page qui n'existe pas</h3>
            <h3>Pour revenir à la page d'accueil, cliquez sur le lien suivant</h3>
        </section>
        <section>
            <img class="404__image" src="http://localhost:8080/4W4_wp/wp-content/uploads/2024/03/potato-150-px-2.png" alt="">
        </section>
    </div>
<!--
    Avec wordpress dans le fichier front-page.php, je voudrais faire afficher des cartes de catégorie. Chacune des carte contiendrait: le nom de la catégorie,
    les 10 premiers mots de la description de la catégorie, le nombre d'article dans la catégorie et un lien vers une page category contenant une liste d'articles 
    de cette catégorie.  
-->

    <?php  get_footer(); ?>