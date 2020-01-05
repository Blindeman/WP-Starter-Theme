<?php get_header(); ?>

    <main id="content" class="primary">
        <?php if( have_posts() ) :
            while( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'page' );
                if( comments_open() || get_comments_number() ){
                    comments_template();
                }
            endwhile;
        endif; ?>
    </main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>