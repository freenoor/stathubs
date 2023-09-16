<?php
include("includes/headers/demo2.php"); 
?>

<div class="single-page">
	<div class="container">
	<div class="back-button">
	<button onclick="goBack()">Zurück zu anderen Blogs</button>
	</div>
	<div class="blog-b">
		<div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #FFF;' : ''; ?>">
		<img src="<?php the_post_thumbnail_url();?>" alt="abc" onerror="this.style.display='none'"/>
		</div>
		<div class="bottom-content">
		<div class="cat-date"><h4><?php 
		$category = get_the_category( $post->ID );
		echo $category[0]->cat_name;?>
		</h4>
		<h4><?php the_time('F j, Y'); ?></h4>
		</div>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		</div>
	</div>
	</div>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>

<?php include("includes/footers/demo1.php");  ?>