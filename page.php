<?php
/*
Template Name: Contact

*/
?>
<?php get_header(); ?>

<div class="container m-auto my-3">

    <?php

    if (have_posts()) :
        while (have_posts()) : the_post();

            ?>
            <div class=" rounded-lg overflow-auto  break-all p-5 m-auto  shadow-lg">

                <h1 class="text-gray-700  text-center text-6xl font-bold"><?php echo the_title(); ?></h1>
                <p class="text-gray-800">
                    <?php the_content(); ?>
                </p>
            </div>
    <?php

        endwhile;
    endif;

    ?>

</div>
<?php get_footer(); ?>