<?php if( post_password_required() ){
    return;
} ?>
<div id="comments">
    <?php if( have_comments() ){ ?>
        <h3><?php comments_number(); ?></h3>
        <?php the_comments_navigation(); ?>
        <ul class="comment-list">
            <?php wp_list_comments(); ?>
        </ul>
        <?php the_comments_navigation(); ?>
    <?php }
    comment_form(); ?>
</div><!-- #comments -->