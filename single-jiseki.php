<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>
        <h1 class="post-title"> </h1>
    
    <?php
$tags = get_the_tags();
foreach( $tags as $tag) { 
echo '<span>',$tag->name ,'</span>';
}
?>
				<?php the_title(); ?>
<p><?php $image = get_field('photo');
$src = $image['sizes']['medium'];
$width = $image['sizes']['medium-width'];
$height = $image['sizes']['medium-height'];
 ?>
<img src="<?php echo $src; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt=""></p>
    <p><?php echo get_field('haccyuusya'); ?></p>
    <p><?php echo get_field('sekoubasyo'); ?></p>
    <p><?php echo get_field('kansei'); ?></p>
    <p><?php echo get_field('koujigaiyou'); ?></p>
    <p><?php echo get_field('sekougijyutu'); ?></p>
			<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>