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