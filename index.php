<!doctype html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
</head>

<body>
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php
      }
    }
    ?>
</body>

</html>