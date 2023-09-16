<?php
/**
 * @package Standard
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="copyr">
      		<p>&copy;<?php echo date(' Y  ') ;?>All rights Reserved. <a href="https://solution25.com/">solution25</a> </p>
  			</div>
	  	</div>
	</footer><!-- #colophon -->
	</div>
	
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
 window.dataLayer.push({
 "event" : "cf7submission",
 "formId" : event.detail.contactFormId,
 "response" : event.detail.inputs
 })
}); 
</script>
</body>
</html>
