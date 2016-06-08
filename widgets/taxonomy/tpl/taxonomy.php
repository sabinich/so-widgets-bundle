<?php
/**
 * @var $post
 * @var $taxonomy_name
 * @var $show_label
 */
?>

<div id="sow-taxonomy-container" class="sow-taxonomy">

	<?php
	if ( ! empty( $show_label ) ) {
		$taxonomy = get_taxonomy( $taxonomy_name );
	?>
		<h3 class="widget-title"><?php echo $taxonomy->label; ?></h3>
	<?php } ?>
	<?php $terms = get_the_terms( $post->ID, $taxonomy_name ); ?>

	<?php foreach ( $terms as $term ) : ?>
		<a href="<?php get_term_link( $term, $taxonomy_name ) ?>" rel="tag"><?php echo $term->name ?></a>
	<?php endforeach; ?>

</div>
