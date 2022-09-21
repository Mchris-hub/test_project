<?php get_header();?>

<section class="page-wrap">
<div class="container">
        
              <h1><?php  the_title( );  ?></h1>
              
              <?php 
              get_template_part('includes/section','content'); 
              
              ?>
              
             <br>
             <div class="container">
                 
                   <h1><?php the_field("phone_number"); ?></h1>
                   <h1><?php the_field("email"); ?></h1>

             </div>
             <br>
             <div class="container">
             <?php 
             $image = get_field('picture');
             $picture = $image['sizes']['large'];

             
             ?>
             <img src="<?php  echo $picture ?>"class="img-field">
             </div>
             
            
</div>
</section>


<?php get_footer();?>

