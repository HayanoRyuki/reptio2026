<?php
/**
 * CPT: ロゴ
 * - サムネイル（ロゴ画像）＋タイトルのみ
 * - 「TOPに表示（最新30件）」メタボックス対応
 */

/* =========================================================
   カスタム投稿タイプ：logo
========================================================= */
function reptio2026_cpt_logo() {

    register_post_type('logo', [
        'label'         => 'ロゴ',
        'public'        => true,
        'menu_icon'     => 'dashicons-format-image',
        'menu_position' => 6,
        'supports'      => ['title', 'thumbnail'],
        'show_in_rest'  => true,
    ]);

}
add_action('init', 'reptio2026_cpt_logo');


/* =========================================================
   メタボックス：TOP表示チェック
========================================================= */
function reptio2026_logo_add_top_display_metabox() {

    add_meta_box(
        'logo_top_display',                       // ID
        'TOPに表示（最新30件）',                 // タイトル
        'reptio2026_logo_render_top_display_mb',  // コールバック
        'logo',                                   // 投稿タイプ
        'side',                                   // 表示位置
        'high'                                    // 優先度
    );

}
add_action('add_meta_boxes', 'reptio2026_logo_add_top_display_metabox');


/**
 * メタボックスの表示内容
 */
function reptio2026_logo_render_top_display_mb($post) {

    $value = get_post_meta($post->ID, 'top_display', true);
    wp_nonce_field('logo_top_display_nonce', 'logo_top_display_nonce_field');
    ?>

    <p>
        <label>
            <input type="checkbox" name="top_display" value="1" <?php checked($value, '1'); ?>>
            TOPに表示する
        </label>
    </p>

    <?php
}


/* =========================================================
   メタボックス保存処理
========================================================= */
function reptio2026_logo_save_top_display_metabox($post_id) {

    // nonce チェック
    if (
        !isset($_POST['logo_top_display_nonce_field']) ||
        !wp_verify_nonce($_POST['logo_top_display_nonce_field'], 'logo_top_display_nonce')
    ) {
        return;
    }

    // 自動保存時は何もしない
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // 投稿タイプチェック
    if (isset($_POST['post_type']) && $_POST['post_type'] === 'logo') {

        if (current_user_can('edit_post', $post_id)) {

            // チェックあり → 保存
            if (isset($_POST['top_display'])) {
                update_post_meta($post_id, 'top_display', '1');

            // チェックなし → 削除
            } else {
                delete_post_meta($post_id, 'top_display');
            }
        }
    }
}
add_action('save_post', 'reptio2026_logo_save_top_display_metabox');
