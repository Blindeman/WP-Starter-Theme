<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->
    <?php if( has_post_thumbnail() ){ ?>
        <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
    <?php } ?>
    <div class="entry-content">
        <?php the_content(); ?>
        <div class="page-links"><?php wp_link_pages(); ?></div><!-- .page-links -->
    </div><!-- .entry-content -->
    <footer class="entry-footer">
            <?php edit_post_link(); ?>
            <?php if( comments_open() || get_comments_number() ){
                comments_template();
            } ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->