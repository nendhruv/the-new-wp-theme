<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
     
        <div id="container" class="container">
        <div class="row">  
            <div id="content" >

                <div class="col-sm-9 col-xs-12 ">
             
<?php the_post(); ?>
                 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title heading font"><strong><?php the_title(); ?></strong></h1>
                    <div class="entry-content font1">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'new' ) . '&after=</div>') ?>                 
<?php edit_post_link( __( 'Edit', 'new' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           
             





             </div>
            </div><!-- #content --> 

            <div class="col-sm-3 col-xs-12 sidebar">

  <?php get_sidebar('about'); ?>
</div>
        </div>
   
        

        </div><!-- #container -->
         
  
<?php get_footer(); ?>