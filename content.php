<div class="card relative">

    <span class="absolute  top-2 left-2 inline-block bg-teal-700 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2   my-2 mx-2"><?php the_time('F j, Y'); ?></span>
    <div class="max-w-sm rounded  overflow-hidden shadow-xl">
        <img class="w-full" src="<?php the_post_thumbnail_url(); ?>" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl text-gray-900 capitalize hover:text-gray-500 mb-2 hover"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
            <p class="text-gray-700 text-base card-excerpt">
                <?php the_excerpt() ?>
            </p>
        </div>

        <div class="px-6 py-4 text-gray-600">

            <span class="font-bold"><?php echo get_comments_number(); ?></span>
            <span class="dashicons dashicons-admin-comments"></span>
        </div>
    </div>
</div>