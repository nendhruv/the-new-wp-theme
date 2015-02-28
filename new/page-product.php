<?php /*  
Template Name: product
*/
?>
<?php get_header('product'); ?>
     
        <div id="container" class="container">
        <div class="row">  
            <div id="content-prod" class="col-sm-10  col-sm-offset-1 col-xs-10 col-xs-offset-1">
             
<?php the_post(); ?>
                 
                <div class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="row ">
                    <h3 class="gap entry-title heading-prod font"><strong><?php the_title(); ?></strong></h3>
                </div>
                    <div class="entry-content font1">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'new' ) . '&after=</div>') ?>                 
<?php edit_post_link( __( 'Edit', 'new' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           
             





             
            </div><!-- #content --> 

     
   
        </div>
                      <!--  <?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} else {
    // the current post lacks a thumbnail
}
?>   -->
        

        </div><!-- #container -->
         
  
<?php get_footer(); ?>