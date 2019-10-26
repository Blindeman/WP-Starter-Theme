<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if( is_singular() ){ ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h2 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php } ?>
        <?php if( 'post' === get_post_type() ){ ?>
            <div class="entry-meta">
                <span class="author vcard"><?php the_author_posts_link(); ?></span>
                <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
            </div><!-- .entry-meta -->
        <?php } ?>
    </header><!-- .entry-header -->
    <?php if( has_post_thumbnail() ){
        if( is_singular() ){ ?>
            <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
        <?php } else { ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail(); ?></a>
        <?php } ?>
    <?php } ?>
    <div class="entry-content">
        <?php the_content();
        wp_link_pages(); ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
            <?php if( 'post' === get_post_type() ){ ?>
                <span class="cat-link"><?php esc_html_e( 'Categories: ', 'beachfire' ); the_category( ', ' ); ?></span>
                <span class="tag-link"><?php the_tags(); ?></span>
            <?php } ?>
            <?php edit_post_link(); ?>
            <?php if( !is_single() && !post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
                <span class="comments-link"><?php comments_popup_link(); ?></span>
            <?php } ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->