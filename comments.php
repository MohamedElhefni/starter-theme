<?php
if (comments_open()) :


    echo '   <h2 class="text-4xl text-gray-400 text-center"> <span class="text-teal-500">' . get_comments_number() . ' </span>Comment</h2>';


    $comments_args = array(
        'max_depth' => 2,
        'avatar_size' => 64
    );
    echo "<ul class='my-comments'>";
    wp_list_comments($comments_args);
    echo "</ul>";

    comment_form();

else :
    echo "Comments Are Closed";
endif;
