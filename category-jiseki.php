<?php get_header(); ?>

<?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
    array(
        'post_type' => 'jiseki',
        'posts_per_page' => 5,
    )
);
?>

<?php get_footer(); ?>