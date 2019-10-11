<?php get_header(); ?>

<div class="container m-auto my-6 flex flex-no-wrap sm:flex-wrap lg:flex-no-wrap  justify-between">

    <main class="px-3 w-full">
        <?php

        if (have_posts()) :
            while (have_posts()) : the_post();

                ?>
                <div class="w-full relative main-header">
                    <div class=" my-3 mx-3 absolute bottom-0 left-0 ">
                        <h1 class="font-bold text-white text-5xl"><?php the_title(); ?></h1>
                    </div>
                    <div class="category absolute top-0 m-3">
                        <div class=" flex p-1 rounded-sm text-white"> <?php category_loop(); ?></div>
                    </div>

                    <div class="category absolute top-0 right-0 m-3">
                        <div class="  p-2 rounded-sm text-white"> <?php edit_post_link() ?></div>
                    </div>


                    <div class="main-image">
                        <img class="w-full object-cover" src="<?php the_post_thumbnail_url() ?>" alt="">
                    </div>
                </div>
                <div class="main-content">

                    <div class="break-all my-5 p-4 text-gray-800">
                        <div class="text-small text-black">
                            <?php the_date() ?>
                        </div>
                        <?php the_content(); ?>
                    </div>

                    <div class="author">
                        <div class="my-3 p-6 shadow-md rounded-md flex items-center justify-start flex-wrap">
                            <div class="img">
                                <img class="rounded-full mx-3 avatar" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="">
                            </div>
                            <div class="info">
                                <h2 class="text-xl"><?php echo get_the_author_meta('nickname') ?></h2>
                                <p class="text-gray-800"><?php echo get_the_author_meta('description') ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="content-footer my-4  border-t py-3 border-b border-gray-600">
                        <h3><span class="text-gray-600"><span class="dashicons dashicons-tag mt-2"></span> Tags : </span> <?php tags_loop(); ?> </h3>
                    </div>

                    <div class="next-prev flex justify-between">
                        <!-- <?php echo get_the_post_thumbnail(get_next_post()->ID) ?>  //just try to get the next post image for some ideas to deisgn good theme :D -->

                        <div class="prev-post">
                            <?php previous_post_link("<span class='p-2 my-3 bg-white text-teal-500 hover:text-white hover:bg-teal-500 rounded shadow '><< %link</span>") ?>

                        </div>

                        <div class="next-post">
                            <?php next_post_link("<span class='p-2 my-3 bg-white text-teal-500 hover:text-white hover:bg-teal-500 rounded shadow'>%link >></span>") ?>
                        </div>


                    </div>
                    <div class="clear-fix"></div>

                    <div class="comments-area bg-white rounded shadow-lg p-5 ">

                        <?php comments_template(); ?>

                    </div>

                </div>

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