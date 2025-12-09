<?php
/**
 * CPT: 採用（自社求人）
 */

function reptio2026_cpt_recruit() {

    register_post_type('recruit', [
        'label' => '採用情報',
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 7,
        'has_archive' => true,
        'rewrite' => ['slug' => 'recruit'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);

}
add_action('init', 'reptio2026_cpt_recruit');
