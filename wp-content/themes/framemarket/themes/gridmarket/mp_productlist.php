<?php // custom template for product list
get_header();
?>
<div id="content">
	<?php if ( class_exists( 'MarketPress' ) ) {
		?>
			<h1 class="post-title"><?php _e( 'Our products', 'framemarket' ) ?></h1>
			<?php echo mp_products_filter(); ?>
			<div id="mp-product-grid">
				<?php framemarket_grid_mp_list_products();?>
				<div class="clear"></div>
			</div>
		<?php
	}
	?>
</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>