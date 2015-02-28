<?php get_header(); ?> 
  <div id="container" class="container">
    <div class="row">
            <div id="content" class="col-sm-9">


                <?php /* Top post navigation */ ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div id="nav-above" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&amp;laquo;</span> Older posts', 'new' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&amp;raquo;</span>', 'new' )) ?></div>
                </div><!-- #nav-above -->
<?php } ?>



                <?php /* The Loop — with comments! */ ?>
<?php while ( have_posts() ) : the_post() ?>
 
<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /* an h2 title */ ?>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'new'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
<?php /* Microformatted, translatable post meta */ ?>
                    <div class="entry-meta">
                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'new'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'new' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'new'); ?></span>
                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-dTH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                        <?php edit_post_link( __( 'Edit', 'new' ), '<span class="meta-sep">|</span><span class="edit-link">', '</span>' ); ?>
                    </div><!-- .entry-meta -->
 
<?php /* The entry content */ ?>
                    <div class="entry-content">
<?php the_content( __( 'Continue reading <span class="meta-nav">&amp;raquo;</span>', 'new' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'new' ) . '&amp;after=</div>') ?>
                    </div><!-- .entry-content -->
 
<?php /* Microformatted category and tag links along with a comments link */ ?>
                   
                </div><!-- #post-<?php the_ID(); ?> -->
 
<?php /* Close up the post div and then end the loop with endwhile */ ?>
 
<?php endwhile; ?>



<?php /* Bottom post navigation */ ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&amp;laquo;</span> Older posts', 'new' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&amp;raquo;</span>', 'new' )) ?></div>
                </div><!-- #nav-below -->
<?php } ?>

            </div><!-- #content -->
</div>
 
        </div><!-- #container -->
 
        <div id="primary" class="widget-area col-sm-3">
        </div><!-- #primary .widget-area -->
 
        <div id="secondary" class="widget-area">
        </div><!-- #secondary -->
        <?php get_sidebar(); ?>
<?php get_footer(); ?>