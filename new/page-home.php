<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
     
        <div id="container-home">
        <div class="row improved">  
            <div id="content" class="col-sm-12">
             
<?php the_post(); ?>
                 
                <div class="row improved" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="">
                    <!--<h1 class="gap entry-title home-title heading"><?php the_title(); ?></h1>-->
                </div>
                    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'new' ) . '&after=</div>') ?>                 
<?php edit_post_link( __( 'Edit', 'new' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           
             





             
            </div><!-- #content --> 

     
        </div>

                        <?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} else {
    // the current post lacks a thumbnail
}
?>    


        

        </div><!-- #container -->
         
  
<?php get_footer(); ?>