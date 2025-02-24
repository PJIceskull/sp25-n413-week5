<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<nav <?php echo get_block_wrapper_attributes(); ?>>
	<ul>
		<li>
			<a href="#">Music Academy</a>
		</li>
		<li>
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">Instructor</a>
		</li>
		<li>
			<a href="#">Lessons</a>
		</li>
	</ul>
</nav>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e('Main Nav – hello from a dynamic block!', 'main-nav'); ?>
</p>