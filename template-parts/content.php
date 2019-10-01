<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if( is_singular() ){ ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h2 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php }
        //TODO: author and date if??? ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php the_content();
        wp_link_pages(); ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
            <?php //TODO: taxonomy stuff
            edit_post_link(); ?>
            <?php if( is_single() && ( comments_open() || get_comments_number() ) ){
                comments_template();
            } ?>
            <?php if( !is_single() && !post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
                <span class="comments-link"><?php comments_popup_link(); ?></span>
            <?php } ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->