<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small>

<p><?php the_content(); ?></p>

<hr>