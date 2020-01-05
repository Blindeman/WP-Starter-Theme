<?php get_header(); ?>
    
    <main id="content" class="primary">
        <?php if( have_posts() ) :
            if( is_home() && !is_front_page() ) : ?>
                <header class="blog-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header><!-- .blog-header -->
            <?php endif;
            while( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
            the_posts_navigation();
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif; ?>
    </main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>