<?php


if (!class_exists('Redux')) {
    return;
}

unset( Redux_Core::$server['REMOTE_ADDR'] );

$opt_name = 'greenbelt_opt';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name' => $theme->get('Name'),
    'display_version' => $theme->get('Version'),
    'menu_title' => esc_html__('Green Belt', 'greenbelt'),
    'customizer' => true,
     'dev_mode'        => false,
);

Redux::set_args($opt_name, $args);

Redux::set_section($opt_name, array(
    'title' => esc_html__('Footer', 'greenbelt'),
    'id' => 'basic',
    'desc' => esc_html__('Footer Description.', 'greenbelt'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'opt-address',
            'type' => 'editor',
            'title' => esc_html__('Office Address', 'greenbelt'),
            'desc' => esc_html__('অফিস এড্রেস.', 'greenbelt'),
            'hint' => array(
                'content' => '<p>1403, Shah Ali Plaza. Mirpur 10 Circle.
                            Dhaka, Bangladesh - 1216<br>
                            +8801869649817 <br>
                            greenbelt.bd@gmail.com </p>',
            ),
            'default' => '<p>1403, Shah Ali Plaza. Mirpur 10 Circle.
Dhaka, Bangladesh - 1216<br>
+8801869649817 <br>
greenbelt.bd@gmail.com </p>'
        ),
        array(
            'id' => 'opt-name',
            'type' => 'text',
            'title' => esc_html__('Footer Credit Name', 'greenbelt'),
            'hint' => array(
                'content' => 'Green Belt',
            ),
            'default' => esc_html__('গ্রীণবেল্ট', 'greenbelt'),
        ),
        array(
            'id' => 'opt-copy',
            'type' => 'text',
            'title' => esc_html__('Footer Link', 'greenbelt'),
            'hint' => array(
                'content' => 'https://www.facebook.com/GreenBelt.BD/',
            ),
            'default' => 'https://www.facebook.com/GreenBelt.BD/'
        ),
    ),
));

Redux::set_section($opt_name, array(
    'title' => esc_html__('FrontPage', 'greenbelt'),
    'id' => 'front',
    'desc' => esc_html__('Frontpage Section Title.', 'greenbelt'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'opt-tpack',
            'type' => 'text',
            'default' => esc_html__('ট্যুর প্যাকেজ', 'greenbelt'),
        ),
        array(
            'id' => 'opt-tmon',
            'type' => 'text',
            'default' => esc_html__('টেস্টিমোনিয়াল', 'greenbelt'),

        ),
        array(
            'id' => 'opt-tinfo',
            'type' => 'text',
            'default' => esc_html__('ভ্রমণ তথ্য', 'greenbelt'),
        ),
        array(
            'id' => 'opt-tblog',
            'type' => 'text',
            'default' => esc_html__('ট্রাভেলার্স ব্লগ', 'greenbelt'),
        ),
        array(
            'id' => 'opt-ttips',
            'type' => 'text',
            'default' => esc_html__('ভ্রমণ টিপস', 'greenbelt'),
        ),
    ),
));
