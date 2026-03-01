<?php get_header(); ?>

<div class="container blog-list">
    <h1>Blog</h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
        <div class="post-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>