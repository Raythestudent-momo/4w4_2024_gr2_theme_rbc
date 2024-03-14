<?php get_header(); ?>
<!-- <h1>single.php</h1> -->
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
                <div class="section__carte">
                    <?php if (have_posts()):
                        while (have_posts()): the_post();                   
                    ?>
                        <div class="carte">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
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
    <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php get_footer(); ?>