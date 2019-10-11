<?php



function learn_script_enqueue()
{
    wp_enqueue_style("tailwindcss", get_template_directory_uri() . '/assets/css/tailwind.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style("customcss", get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style("font_raleway", 'https://fonts.googleapis.com/css?family=Raleway&display=swap', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}

function enqueue_slick_scripts()
{
    wp_enqueue_style("slick-css", get_template_directory_uri() . '/assets/slider/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style("slicktheme-css", get_template_directory_uri() . '/assets/slider/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/slider/slick.min.js', array('jquery'), '1.0.0', true);
}


function learn_theme_setup()
{
    add_theme_support('menus');
    register_nav_menu('main_menu', "Main Menu In Top Of Website");
    add_theme_support('post-thumbnails');
}

add_theme_support('custom-header');
add_theme_support('post-formats', array('quote'));
add_theme_support('html5', array('search-form'));
// call functions 

add_action("wp_enqueue_scripts", "learn_script_enqueue");
add_action('init', 'learn_theme_setup');
add_action('init', 'enqueue_slick_scripts');

// sidebar functions 

function learn_widget_setup()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'The Main Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title text-gray-600 text-xl font-bold my-5 py-2">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'learn_widget_setup');


// loop insige the category 

function category_loop()
{
    if (has_category()) {
        $categories = get_the_category();
        foreach ($categories as $category) {
            echo '<a class="bg-teal-500 p-1 hover:bg-teal-400 rounded mx-2" href="' . get_category_link($category->cat_ID) . '">' . $category->cat_name . '</a>';
        }
    } else {
        echo  'thre is no category';
    }
}
function tags_loop()
{
    if (has_tag()) {
        $tags = get_the_tags();
        foreach ($tags as $tag) {
            echo '<a class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 cursor-pointer hover:bg-teal-700 hover:text-white" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
        }
    } else {
        echo "there is no tags";
    }
}
function wpdocs_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
