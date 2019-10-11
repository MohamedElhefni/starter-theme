<?php get_header(); ?>

<div class="container m-auto my-3 flex flex-wrap justify-between">

    <main class="w-9/12 mx-auto">
        <?php

        if (have_posts()) :
            while (have_posts()) : the_post();

                ?>

                <?php get_template_part('content', 'search') ?>

        <?php

            endwhile;
        endif;

        ?>
    </main>
    <div class="sidebar">
        <?php get_sidebar() ?>
    </div>

</div>
<?php get_footer(); ?>