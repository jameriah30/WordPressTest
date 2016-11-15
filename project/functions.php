<?php register_nav_menus();




    add_action('widgets_init', 'my_sidebar');

    function my_sidebar(){
        /*Register the primary sidebar*/
        register_sidebar(
            array(
                'id' => 'primary',
                'names' => ('Primary'),
                'description' => ('This is the primary sidebar'),
                'before-widget' => '<div id="%1$s" class="widget%2$s">',
                'after-widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title'=> '</h3>'
            )
        );
    }
