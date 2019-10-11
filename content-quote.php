<div class="card shadow-2xl flex items-center flex-col justify-center rounded-lg  p-4">
    <h2 class="text-gray-600 text-5xl font-bold ">Quote</h2>
    <div class="max-w-xs sm:max-w-sm mt-8 mx-auto bg-gray-light  p-8">
        <h2 class=" text-right text-gray-700 leading-normal bg-gray-100 p-3 border-l-4 border-gray-700">
            <?php the_content() ?>
        </h2>

    </div>
    <div class="flex items-center">
        <?php
        if (has_post_thumbnail()) :
            ?>
            <img class="w-10 h-10 rounded-full mr-4" src="<?php the_post_thumbnail_url() ?>" alt="Avatar of Jonathan Reinink">

        <?
        else :
            ?>
            <img class="w-10 h-10 rounded-full mr-4" src="<?php echo get_template_directory_uri() . '/assets/images/defaultThum.png' ?>" alt="Avatar of Jonathan Reinink">
        <?
        endif;
        ?>
        <div class="text-sm">
            <p class="text-gray-900 leading-none capitalize"><?php the_title(); ?></p>
            <p class="text-gray-600"><?php the_time('F j') ?></p>
        </div>
    </div>
</div>