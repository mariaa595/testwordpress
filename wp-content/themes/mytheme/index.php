<?php get_header(); ?>

				
<?php the_title( '<h1>', '</h1>' ); ?>
<?php  ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php  the_content(); ?>

<?php endwhile; else : ?>

<?php ?>

<?php endif; ?>
<?php get_footer(); ?>

		<!-- Scripts 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script> -->

	</body>
</html>
