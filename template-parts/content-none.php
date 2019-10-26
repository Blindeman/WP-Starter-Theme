<article id="post-notfound" class="post-notfound page type-page status-publish hentry">
    <header class="entry-header">
        <h1 class="entry-title"><?php esc_html_e( 'Not Found', 'beachfire' ); ?></h1>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php if( is_search() ) : ?>
            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'beachfire' ); ?></p>
        <?php else : ?>
            <p><?php esc_html_e( 'Nothing was found at this location. Try a search instead?', 'beachfire' ); ?></p>
        <?php endif; ?>
        <?php get_search_form(); ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
</article><!-- #post-notfound -->