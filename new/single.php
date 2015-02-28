<?php get_header(); ?>
 
        <div id="container">
            <div id="content">
 
                <div id="nav-above" class="navigation">
    <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&amp;laquo;</span> %title' ) ?></div>
    <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&amp;raquo;</span>' ) ?></div>
</div><!-- #nav-above -->
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'new' ) . '&amp;after=</div>') ?>

                </div><!-- #post-<?php the_ID(); ?> -->
 
               <div id="nav-below" class="navigation">
    <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&amp;laquo;</span> %title' ) ?></div>
    <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&amp;raquo;</span>' ) ?></div>
</div><!-- #nav-below -->

              
            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>