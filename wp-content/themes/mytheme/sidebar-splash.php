</aside>
<?php if(! is_active_sidebar('sidebar2')) {
	return;
}?>

<aside id="secondary" class="widget-area " role="complementary">

  <?php dynamic_sidebar( 'sidebar2' ); ?>

</aside>