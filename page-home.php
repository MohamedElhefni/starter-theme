<?php
/*
Template Name: home

*/
?>
<?php get_header(); ?>

<div class="container m-auto my-3">


    <section class="center slider">

        <?php
        $args = array(
            'type' => 'post',
            'posts_per_page' => 4,
            'category_name' => 'news',
        );
        $newsPosts = new WP_Query($args);
        if ($newsPosts->have_posts()) :
            while ($newsPosts->have_posts()) : $newsPosts->the_post();

                ?>
                <div class="max-w-md rounded relative  news-card overflow-hidden shadow-xl">

                    <div class="  rounded-lg overflow-auto  break-all  m-auto  shadow-lg">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="absolute top-0 bg-red-900 rounded-lg shadow mx-2 my-3 p-1 hover:bg-red-700 cursor-pointer text-white">
                            <a href="<?php echo esc_url(get_category_link(get_the_category()[0]->term_id)) ?>"><span><?php echo get_the_category()[0]->name ?></span></a>
                        </div>
                        <div class="absolute  news-content top-0">
                            <h1 class="text-gray-200 capitalize text-center hover:text-gray-400 cursor-pointer text-2xl font-bold"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h1>
                        </div>
                    </div>
                </div>
        <?php

            endwhile;
        endif;

        wp_reset_postdata();


        ?>
    </section>
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