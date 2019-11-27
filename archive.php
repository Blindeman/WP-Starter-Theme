<?php get_header(); ?>

    <main id="content" class="content">
        <header class="archive-header">
            <h1 class="archive-title"><?php the_archive_title(); ?></h1>
            <?php if( '' != get_the_archive_description() ){ ?>
            <div class="archive-description">
                <?php the_archive_description(); ?>
            </div><!-- .archive-description -->
            <?php } ?>
        </header><!-- .archive-header -->
        <?php if( have_posts() ) :
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