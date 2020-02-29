<!DOCTYPE html>
<head> 
	<title>mywork</title>
</head>
<body>
	<?php echo get_the_title(); ?>
	<?php
while ( have_posts() ) {
	the_post();
	the_content();
}
?>
</body>
</html>