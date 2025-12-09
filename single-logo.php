<?php
// ロゴ詳細ページは存在させない → 一覧へリダイレクト
wp_redirect( home_url('/logo'), 301 );
exit;
?>