<?php

/* Disable WordPress Admin Bar for all users but admins. */

show_admin_bar(false);

add_action( 'after_setup_theme', 'register_theme_menu' );
function register_theme_menu() {
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'Top'   => __( 'Top primary menu', 'theme_luapp' ),
        'Footer' => __( 'Footer menu', 'theme_luapp' ),
    ) );
}

if (!function_exists( 'setup' )) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on unius, use a find and replace
         * to change 'unius' to the name of your theme in all the template files.
         */
        load_theme_textdomain('unius', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'unius'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
            )
        );

    }
}
add_action( 'after_setup_theme', 'setup' );

/*
 * Pagination
 */
function wp_pagination($pages = '', $range = 9) {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base'       => @add_query_arg('page','%#%'),
        'format'     => '',
        'total'      => $wp_query->max_num_pages,
        'current'    => $current,
        'show_all'   => false,
        'prev_text'  => __('<'),
        'next_text'  => __('>'),
        'type'       => 'plain'
    );
    $currentURL = get_pagenum_link(1,true);
    $explodedLink = explode('/?', $currentURL);
    $singleLink = $explodedLink[0];
    $params = @explode('/', $explodedLink[1]);
    if ($wp_rewrite->using_permalinks()) {
        $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', $singleLink)) . 'page/%#%/', 'paged');
    }
    if (!empty($wp_query->query_vars['s'])) $pagination['add_args'] = array('s' => get_query_var('s'));
    echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_pagination"><div class="container-pag">'.paginate_links($pagination).'</div></div>';
}

/*
 * Per Page dos projetos
 */
function pagination_query ($query) {
    if ($query->is_main_query() && is_category()) {

        $query->set('posts_per_page', 2);
    }
    return $query;
}
add_action('pre_get_posts', 'pagination_query' );