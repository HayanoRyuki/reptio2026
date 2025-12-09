<?php
/**
 * CPT: 導入事例（CASE）
 */

function reptio2026_cpt_case() {

    register_post_type('case', [
        'label' => '導入事例',
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'menu_position' => 8,
        'has_archive' => true,
        'rewrite' => ['slug' => 'case'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);

}
add_action('init', 'reptio2026_cpt_case');
