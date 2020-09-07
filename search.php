<?php get_header(); ?>

    <main id="content" class="primary">
        <?php if( have_posts() ) : ?>
            <header class="search-header">
                <h1 class="page-title">
                <?php 
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'beachfire' ), get_search_query() ); ?></h1>
                <?php get_search_form(); ?>
            </header><!-- .search-header -->
            <?php while( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
			the_posts_navigation();
			//if you prefer pagination:
			//the_posts_pagination();
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif; ?>
    </main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>