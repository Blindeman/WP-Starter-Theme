<?php get_header(); ?>

    <main id="content">
        <?php if( have_posts() ) :
            while( have_posts() ) :
                the_post();
                
                get_template_part( 'template-parts/content', 'page' );

            endwhile;
        endif; ?>
    </main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>