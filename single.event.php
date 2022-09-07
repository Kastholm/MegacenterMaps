<?php
get_header()
/*
Template Name: event-single
Template Post Type: minievents, mainevents
*/ 
?>

<div class='event-banner'>
     <img src= <?php echo the_post_thumbnail_url() ?> alt="" />

</div>
 
<div class="event-text">

<h4 class="type-tag-event"><?php  

function hej() { 

    $termDato = get_terms([
                    'taxonomy' => $taxonomy = 'Dato',
                    'hide_empty' => true,
                ]);
               


                foreach ($termDato as $termo){
                    /* if(page title og termo name samme, stop) {
   
                    } */
                    echo $termo->description;
                    if($termo->name === get_the_title()) {
                       
                       
                        
                   } ;
                 };


}


hej()


  ?></h4>
<h2><?php echo the_title() ?> </h2>

<?php echo get_the_content( ) ?>

     </div>


     <div class="divider">
  <h2 class="event-title">Alle Events hos Holbæk Megacenter</h3>
</div>


<div id="owl-carouselTwo" class="owl-carouselTwo shop-events-dias owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">
  
  


<?php $MiniPosts = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'minievents',
  'order' => 'ASC'
)); 
while($MiniPosts -> have_posts()) {
  $MiniPosts->the_post(); ?>

 <div class="item" style=""> 
 <a href="<?php echo the_permalink();?>"><img src= <?php echo the_post_thumbnail_url() ?> /> 
  <h3 class> <?php the_title(); ?></a></h3>
   </div> 
   

<?php
}
?>
</div> 



<?php
get_footer()
?>