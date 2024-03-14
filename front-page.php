<?php get_header(); ?>
<!-- <h1>front-page.php</h1> -->
    <div id="entete" class="global">
        <section class="entete__header">
            <h1 class="bgc-text"><?php echo get_bloginfo('name') ?></h1>
            <h2 class="bgc-text"><?php echo get_bloginfo('description') ?></h2>
            <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
            <button class="entete__button">Événements</button>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
                <div class="section__carte">
                    <?php
                    /*
                        if (have_posts()) {
                            while (have_posts()) {
                            the_post();
                            the_title('<h3>', '</h3>');
                            $contenu = get_the_content('<p>', '</p>');
                            $contenu = wp_trim_words($contenu, 10);
                            echo $contenu;
                            }
                        }
                    */
                    ?>
                    <?php if (have_posts()):
                        while (have_posts()): the_post();                   
                    ?>
                        <div class="carte">
                            <h5><?php the_title(); ?></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                            <p><a href="<?php echo get_permalink(); ?>">Voir la suite</a></p>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>                   
                </div>
            <!-- <blockquote>
                <p>Lorem ipsum, <a class="a__section" href="#">dolor sit amet</a>dolor sit amet consectetur adipisicing elit. Delectus, commodi dicta sapiente 
                    necessitatibus libero ullam magnam provident pariatur accusamus quis cumque, itaque quos natus vel possimus nisi blanditiis cupiditate nemo!
                </p>
            </blockquote> -->
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2>Événement (h2)</h2>
            <blockquote>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nulla ut cum aspernatur 
                    illum doloremque <a class="a__section" href="#">repellendus perferendis</a> voluptas architecto, minus quisquam placeat dolorum totam facilis et sit eligendi explicabo fuga.
                </p>
            </blockquote>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>
            <blockquote>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque repellendus fugiat, 
                    illo iusto veniam voluptatum quaerat ea cupiditate quo nemo et dolorum nihil consectetur <a class="a__section" href="#">deleniti tempore deserunt</a> aliquam voluptatem dolore.
                </p>
            </blockquote>
            <button class="galerie__button" type="button">clique-moi !</button>
        </section>
    <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php get_footer(); ?>