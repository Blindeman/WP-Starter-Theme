<?php get_header(); ?>

    <main id="content">
        <?php if( have_posts()) :
            while( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
                the_post_navigation();
                if( comments_open() || get_comments_number() ){
                    echo "<h2>TWO</h2>";
                    comments_template();
                }
            endwhile;
        endif; ?>
    </main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>