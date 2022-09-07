<?php
get_header()
?>



<div class="top-banner">
     <h1> <?php echo the_title() ?></h1>
</div>







<div class="divider">
  <h2>DET SKER..</h2>
  <p>Se hvad der sker hos Holbæk Megacenter</p>
</div>


<div class="grid-event">

  <div>
    
  
    <a href="<?php the_permalink(256)?>">
      <img src="<?php echo get_the_post_thumbnail_url(256) ?> "  alt="" class="event-img"/><span><h3><?php echo get_the_title(256) ?></h3><h4><?php echo get_the_excerpt( 256 ) ?></h4> <button>Check it out</button>
    </a>
  </span>


</div>

 <div>
    <a href="<?php the_permalink(257)?>"><img src="<?php echo get_the_post_thumbnail_url(257) ?> " alt="" class="event-img"/><span><h3><?php echo get_the_title(257) ?></h3><h4><?php echo get_the_excerpt( 257 ) ?></h4> <button>Check it out</button></a>
  </span></div>

</div>




<div class="divider">
  <h2 class="event-title">Events lige nu</h3>
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
the_content();
    ?>



<?php
get_footer()
?>