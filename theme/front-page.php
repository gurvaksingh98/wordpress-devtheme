<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1>Build. Learn. Deploy.</h1>
        <p>Self-hosted. Self-built. Self-owned.</p>
        <a href="#about" class="btn">Learn More</a>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section container">
    <h2>About Me</h2>
    <p>
        I am building my own infrastructure and learning full stack
        development, DevOps and system architecture.
    </p>
</section>

<!-- SERVICES -->
<section class="section light-bg">
    <div class="container">
        <h2>What I Do</h2>
        <div class="grid">
            <div class="card">
                <h3>Web Development</h3>
                <p>Custom WordPress and modern web apps.</p>
            </div>
            <div class="card">
                <h3>DevOps</h3>
                <p>Docker, CI/CD, Infrastructure automation.</p>
            </div>
            <div class="card">
                <h3>Self Hosting</h3>
                <p>Running everything on my own servers.</p>
            </div>
        </div>
    </div>
</section>

<!-- BLOG -->
<section class="section container">
    <h2>Latest Posts</h2>

    <div class="grid">
        <?php
        $query = new WP_Query(array('posts_per_page' => 3));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>

            <div class="card">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo "<p>No posts yet.</p>";
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>