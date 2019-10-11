<?php get_header(); ?>

<div class="container m-auto my-3 flex flex-wrap justify-between">

    <main>
        <div class="grid-area">
            <?php

            if (have_posts()) :
                while (have_posts()) : the_post();

                    ?>
                    <?php get_template_part('content', get_post_format()) ?>

            <?php

                endwhile;
            endif;

            ?>
        </div>
        <div class="flex justify-between">
            <div class="next-posts float-left  my-3">
                <?php previous_posts_link('<span class="p-2 bg-white shadow rounded text-teal-500 hover:bg-teal-500 hover:text-white"> << Newer Posts </span>') ?>
            </div>
            <div class="previous-posts float-right my-3">
                <?php next_posts_link(' <span class="p-2 bg-white shadow rounded text-teal-500 hover:bg-teal-500 hover:text-white"> Older Posts >> </span>') ?>
            </div>
        </div>
    </main>
    <div class="sidebar mx-auto">
        <?php get_sidebar() ?>
    </div>

</div>
<?php get_footer(); ?>