<?php
get_header()
?>



<!-- <div class="top-banner">
     
</div> -->

<!-- 
<div id="slider" class="owl-carouselOne owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">



  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div><span class="banner-text">
    <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST</button>
  </span> <img style="min-height: 350px !important; width: 100vw;"  src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""/> 


</div>
  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div> <span class="banner-text">
    <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST <br>
  DISCOVER Tekst</button>
  </span> <img style="min-height: 350px !important; width: 100vw;" src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""> </div>
  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div> <span class="banner-text">
    <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst  tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST <br>
  DISCOVER Tekst</button>
  </span> <img style="min-height: 350px !important; width: 100vw;" src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""> </div>
  <div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"> <div class="overlay">
 </div>
    
    
 
    <span class="banner-text">
      <h1> MEGA CENTER <br>
  Tekst tekst tekst  <br>
  Tekst tekst tekst </h1> <h2>Tekst  tekst tekst tekst tekstk tekst tekst tekst tekst tekst tekst tekst tekst tekst tekst</h2><button>SHOP TEKST <br>
  DISCOVER Tekst</button>
    </span>
    


<img style="min-height: 350px !important; width: 100vw;" src="https://i.ibb.co/N3QBNq6/Center-bredformat-1.jpg" alt=""> </div>
</div>
 -->


<div id="slider" class="owl-carouselOne owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">

<?php $BannerPosts = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'forsidebanner',
  'order' => 'ASC'
)); 
while($BannerPosts -> have_posts()) {
  $BannerPosts->the_post(); ?>


<div class="item" style="width:100vw; max-height: 600px;min-height: 350px !important;"><div class="overlay">
 </div><span class="banner-text">
 <a href="<?php echo the_permalink();?>"> <h1> <?php the_title(); ?> 
  </h1> <h2><?php echo get_the_content() ?></h2><button> <?php echo get_the_excerpt() ?></button>
  </span> <img style="min-height: 350px !important; width: 100vw;"  src=<?php echo the_post_thumbnail_url() ?> alt=""/> 
 <!--  https://wallpaper.dog/large/990949.jpg  -->
 </a>
</div>


<?php
}
?>
</div>

</div>





<div class="shop-buttons">

  <button class="buttonOne">
    <a href="<?php echo the_permalink(57);?>">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M88 48C101.3 48 112 58.75 112 72V120C112 133.3 101.3 144 88 144H40C26.75 144 16 133.3 16 120V72C16 58.75 26.75 48 40 48H88zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 232C16 218.7 26.75 208 40 208H88C101.3 208 112 218.7 112 232V280C112 293.3 101.3 304 88 304H40C26.75 304 16 293.3 16 280V232zM88 368C101.3 368 112 378.7 112 392V440C112 453.3 101.3 464 88 464H40C26.75 464 16 453.3 16 440V392C16 378.7 26.75 368 40 368H88z"/></svg> <label>Liste</label> 
  </button>
  </a>

<button class="buttonTwo">
<a href="#map">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M408 120C408 174.6 334.9 271.9 302.8 311.1C295.1 321.6 280.9 321.6 273.2 311.1C241.1 271.9 168 174.6 168 120C168 53.73 221.7 0 288 0C354.3 0 408 53.73 408 120zM288 152C310.1 152 328 134.1 328 112C328 89.91 310.1 72 288 72C265.9 72 248 89.91 248 112C248 134.1 265.9 152 288 152zM425.6 179.8C426.1 178.6 426.6 177.4 427.1 176.1L543.1 129.7C558.9 123.4 576 135 576 152V422.8C576 432.6 570 441.4 560.9 445.1L416 503V200.4C419.5 193.5 422.7 186.7 425.6 179.8zM150.4 179.8C153.3 186.7 156.5 193.5 160 200.4V451.8L32.91 502.7C17.15 508.1 0 497.4 0 480.4V209.6C0 199.8 5.975 190.1 15.09 187.3L137.6 138.3C140 152.5 144.9 166.6 150.4 179.8H150.4zM327.8 331.1C341.7 314.6 363.5 286.3 384 255V504.3L192 449.4V255C212.5 286.3 234.3 314.6 248.2 331.1C268.7 357.6 307.3 357.6 327.8 331.1L327.8 331.1z"/></svg> <label>Oversigtskort</label> 
</a>
</button>

<button class="buttonThree">
<a href="<?php echo the_permalink(57);?>">
<label class="number"><?php // Get total number of posts in post-type-name
	$count_posts = wp_count_posts('butikker');
	$total_posts = $count_posts->publish;
	echo  $total_posts . '';
?> </label> <label><?php $pt = get_post_type_object('butikker');

echo $pt->label;

 ?></label> 
 </a>
</button>


</div>



<div id="owl-carouselTwo" class="owl-carouselTwo shop-dias owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">
  
<div class="item shop-dias-main" > <img style="max-width: 350px !important;
    min-width: 320px !important;
    max-height: 320px !important;
    min-height: 250px !important;"  src="https://i.ibb.co/mTW2DYq/bygbolig.webp" alt=""/>
<?php $pt = get_post_type_object('butikker');

?>
<h3 class="thumb-label"><?php echo $pt->label;

 ?></h3> 

  </div>

<?php $ButikkerPosts = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'butikker',
  'order' => 'ASC'
)); 
while($ButikkerPosts -> have_posts()) {
  $ButikkerPosts->the_post(); ?>

 <div class="item" style=""> 
 <a href="<?php echo the_permalink();?>"><img style="max-width: 350px !important;
    min-width: 320px !important;"  src= <?php echo the_post_thumbnail_url() ?> /> 
  <h3 class> <?php the_title(); ?></a></h3>
  <!-- style=":before {
    content: "\A";
    border-radius: 50%;
    width: 7px;
    height: 7px;
    background: red;
    display: inline-block;
    margin-right: 5px;
    vertical-align: middle;
  }" -->
  <?php 
  date_default_timezone_set("Europe/Copenhagen");
  $termOpen = get_terms([
                'taxonomy' => $taxonomy = 'Åbningstider',
                'hide_empty' => true,
            ]);
             foreach ($termOpen as $termo){
                 /* if(page title og termo name samme, stop) {

                 } */
                 if($termo->name === get_the_title()) {
                    /* echo $termo->name;
                     echo $termo->description;
                    echo "<br><br>"; */
                } ;
              }; 
              
              $termsClosed = get_terms([
                'taxonomy' => $taxonomy = 'Lukketider',
                'hide_empty' => true,
            ]);
             foreach ($termsClosed as $term){
    
                if($term->name === get_the_title()) {
                        /* echo $term->name;
                         echo $term->description;
                        echo "<br><br>"; */
                    } ;
              };

              if(date("H:i") < $term/* lukke 20 */->description && date("H:i") > $termo/* åbne */->description ) { 
             
                ?> <p class="butik-status"> <?php  echo "Åben"  ; ?> </p>  <?php
                
                }else {
                  ?> <p class="butik-status-two"> <?php  echo "Lukket"; ?> <?php
                  /* echo $term->description;
                  echo date("H:i");
                  echo $termo->description; */
                }
              ?> </p>
   </div> 
<!--  Hvis titlen er samme titel som category og desc er mindre/mere ændrer lukket/åben -->

<?php
}
?>

</div> 




<div class="shop-buttons shop-buttons-margin">

<button class="buttonOne">
    <a href="<?php echo the_permalink(57);?>">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M88 48C101.3 48 112 58.75 112 72V120C112 133.3 101.3 144 88 144H40C26.75 144 16 133.3 16 120V72C16 58.75 26.75 48 40 48H88zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 232C16 218.7 26.75 208 40 208H88C101.3 208 112 218.7 112 232V280C112 293.3 101.3 304 88 304H40C26.75 304 16 293.3 16 280V232zM88 368C101.3 368 112 378.7 112 392V440C112 453.3 101.3 464 88 464H40C26.75 464 16 453.3 16 440V392C16 378.7 26.75 368 40 368H88z"/></svg> <label>Liste</label> 
  </button>
  </a>

<button class="buttonTwo">
<a href="#map">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M408 120C408 174.6 334.9 271.9 302.8 311.1C295.1 321.6 280.9 321.6 273.2 311.1C241.1 271.9 168 174.6 168 120C168 53.73 221.7 0 288 0C354.3 0 408 53.73 408 120zM288 152C310.1 152 328 134.1 328 112C328 89.91 310.1 72 288 72C265.9 72 248 89.91 248 112C248 134.1 265.9 152 288 152zM425.6 179.8C426.1 178.6 426.6 177.4 427.1 176.1L543.1 129.7C558.9 123.4 576 135 576 152V422.8C576 432.6 570 441.4 560.9 445.1L416 503V200.4C419.5 193.5 422.7 186.7 425.6 179.8zM150.4 179.8C153.3 186.7 156.5 193.5 160 200.4V451.8L32.91 502.7C17.15 508.1 0 497.4 0 480.4V209.6C0 199.8 5.975 190.1 15.09 187.3L137.6 138.3C140 152.5 144.9 166.6 150.4 179.8H150.4zM327.8 331.1C341.7 314.6 363.5 286.3 384 255V504.3L192 449.4V255C212.5 286.3 234.3 314.6 248.2 331.1C268.7 357.6 307.3 357.6 327.8 331.1L327.8 331.1z"/></svg> <label>Oversigtskort</label> 
</a>
</button>

<button class="buttonThree">
<a href="<?php echo the_permalink(57);?>">
<label class="number"><?php // Get total number of posts in post-type-name
	$count_posts = wp_count_posts('shopping');
	$total_posts = $count_posts->publish;
	echo  $total_posts . '';
?> </label> <label><?php $pt = get_post_type_object('shopping');

echo $pt->label;

 ?></label> 
 </a>
</button>


</div>



<div id="owl-carouselTwo" class="owl-carouselTwo shop-dias owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">
  
<div class="item shop-dias-main" style=""> <img style="max-width: 350px !important;
    min-width: 320px !important;
    max-height: 320px !important;
    min-height: 250px !important;"  src="https://i.ibb.co/BVgtzny/shopping.webp" alt="shopping" alt=""/>
<?php $pt = get_post_type_object('shopping');
?>
<h3 class="thumb-label"><?php echo $pt->label;

 ?></h3> 

  </div>

<?php $ShopPosts = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'shopping',
  'order' => 'ASC'
)); 
while($ShopPosts -> have_posts()) {
  $ShopPosts->the_post(); ?>

 <div class="item" style=""> 
 <a href="<?php echo the_permalink();?>"><img style="max-width: 350px !important;
    min-width: 320px !important;"  src= <?php echo the_post_thumbnail_url() ?> /> 
  <h3> <?php the_title(); ?></a></h3>
  <?php 
  date_default_timezone_set("Europe/Copenhagen");
  $termOpen = get_terms([
                'taxonomy' => $taxonomy = 'Åbningstider',
                'hide_empty' => true,
            ]);
             foreach ($termOpen as $termo){
                 /* if(page title og termo name samme, stop) {

                 } */
                 if($termo->name === get_the_title()) {
                    /* echo $termo->name;
                     echo $termo->description;
                    echo "<br><br>"; */
                } ;
              }; 
              
              $termsClosed = get_terms([
                'taxonomy' => $taxonomy = 'Lukketider',
                'hide_empty' => true,
            ]);
             foreach ($termsClosed as $term){
    
                if($term->name === get_the_title()) {
                        /* echo $term->name;
                         echo $term->description;
                        echo "<br><br>"; */
                    } ;
              };

              if(date("H:i") < $term/* lukke 20 */->description && date("H:i") > $termo/* åbne */->description ) { 
             
                ?> <p class="butik-status"> <?php  echo "Åben"  ; ?> </p>  <?php
                
              }else {
                ?> <p class="butik-status-two"> <?php  echo "Lukket"; ?> <?php
                /* echo $term->description;
                echo date("H:i");
                echo $termo->description; */
              }
            ?> </p> </div> 

<?php
}
?>

</div> 



<div class="shop-buttons shop-buttons-margin">

<button class="buttonOne">
    <a href="<?php echo the_permalink(57);?>">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M88 48C101.3 48 112 58.75 112 72V120C112 133.3 101.3 144 88 144H40C26.75 144 16 133.3 16 120V72C16 58.75 26.75 48 40 48H88zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 232C16 218.7 26.75 208 40 208H88C101.3 208 112 218.7 112 232V280C112 293.3 101.3 304 88 304H40C26.75 304 16 293.3 16 280V232zM88 368C101.3 368 112 378.7 112 392V440C112 453.3 101.3 464 88 464H40C26.75 464 16 453.3 16 440V392C16 378.7 26.75 368 40 368H88z"/></svg> <label>Liste</label> 
  </button>
  </a>

<button class="buttonTwo">
<a href="#map">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M408 120C408 174.6 334.9 271.9 302.8 311.1C295.1 321.6 280.9 321.6 273.2 311.1C241.1 271.9 168 174.6 168 120C168 53.73 221.7 0 288 0C354.3 0 408 53.73 408 120zM288 152C310.1 152 328 134.1 328 112C328 89.91 310.1 72 288 72C265.9 72 248 89.91 248 112C248 134.1 265.9 152 288 152zM425.6 179.8C426.1 178.6 426.6 177.4 427.1 176.1L543.1 129.7C558.9 123.4 576 135 576 152V422.8C576 432.6 570 441.4 560.9 445.1L416 503V200.4C419.5 193.5 422.7 186.7 425.6 179.8zM150.4 179.8C153.3 186.7 156.5 193.5 160 200.4V451.8L32.91 502.7C17.15 508.1 0 497.4 0 480.4V209.6C0 199.8 5.975 190.1 15.09 187.3L137.6 138.3C140 152.5 144.9 166.6 150.4 179.8H150.4zM327.8 331.1C341.7 314.6 363.5 286.3 384 255V504.3L192 449.4V255C212.5 286.3 234.3 314.6 248.2 331.1C268.7 357.6 307.3 357.6 327.8 331.1L327.8 331.1z"/></svg> <label>Oversigtskort</label> 
</a>
</button>

<button class="buttonThree">
<a href="<?php echo the_permalink(57);?>">
<label class="number"><?php // Get total number of posts in post-type-name
	$count_posts = wp_count_posts('madogdrikke');
	$total_posts = $count_posts->publish;
	echo  $total_posts . '';
?> </label> <label><?php $pt = get_post_type_object('madogdrikke');

echo $pt->label;

 ?></label> 
 </a>
</button>


</div>



<div id="owl-carouselTwo" class="owl-carouselTwo shop-dias owl-carousel owl-theme" style="width:90vw; margin: 0 auto; max-width: 1620px;">
  
<div class="item shop-dias-main" style=""> <img style="max-width: 350px !important;
    min-width: 320px !important;
    max-height: 320px !important;
    min-height: 250px !important;"  src="https://i.ibb.co/kHrTRDt/maddrikke.webp" alt="maddrikke"  alt=""/>
<?php $pt = get_post_type_object('madogdrikke');
?>
<h3 class="thumb-label"><?php echo $pt->label;

 ?></h3> </div>

<?php $MadPosts = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'madogdrikke',
  'order' => 'ASC'
)); 
while($MadPosts -> have_posts()) {
  $MadPosts->the_post(); ?>

 <div class="item" style=""> 
 <a href="<?php echo the_permalink();?>"><img style="max-width: 350px !important;
    min-width: 320px !important;"  src= <?php echo the_post_thumbnail_url() ?> /> 
  <h3> <?php the_title(); ?></a></h3>
  <?php 
  date_default_timezone_set("Europe/Copenhagen");
  $termOpen = get_terms([
                'taxonomy' => $taxonomy = 'Åbningstider',
                'hide_empty' => true,
            ]);
             foreach ($termOpen as $termo){
                 /* if(page title og termo name samme, stop) {

                 } */
                 if($termo->name === get_the_title()) {
                    /* echo $termo->name;
                     echo $termo->description;
                    echo "<br><br>"; */
                } ;
              }; 
              
              $termsClosed = get_terms([
                'taxonomy' => $taxonomy = 'Lukketider',
                'hide_empty' => true,
            ]);
             foreach ($termsClosed as $term){
    
                if($term->name === get_the_title()) {
                        /* echo $term->name;
                         echo $term->description;
                        echo "<br><br>"; */
                    } ;
              };

              if(date("H:i") < $term/* lukke 20 */->description && date("H:i") > $termo/* åbne */->description ) { 
             
                ?> <p class="butik-status"> <?php  echo "Åben"  ; ?> </p>  <?php
                
              }else {
                ?> <p class="butik-status-two"> <?php  echo "Lukket"; ?> <?php
                /* echo $term->description;
                echo date("H:i");
                echo $termo->description; */
              }
            ?> </p></div> 

<?php
}
?>

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





  
 <!--  <div class="item" > <img  style="max-width: 500px !important;
    min-width: 350px !important;"  src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/SS22_MASS_FATHERS_DAY_PROMO_d4_20220608111906.jpg?yocs=D_NA_" alt=""/>
  <h3>Butik</h3>
   </div>
  <div class="item" style=""> <img  style="max-width: 500px !important;
    min-width: 350px !important;" src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/orlando_psycho_FBIG_d4_20220311105336.jpg?yocs=D_NA_" alt=""/>
<h3>Butik</h3>
   </div>
  <div class="item" style=""> <img  style="max-width: 500px !important;
    min-width: 350px !important;" src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/SS22_MASS_FATHERS_DAY_PROMO_d4_20220608111906.jpg?yocs=D_NA_" alt=""/>
<h3>Butik</h3>
   </div>
  <div class="item" style=""> <img style="max-width: 500px !important;
    min-width: 350px !important;"  src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/orlando_psycho_FBIG_d4_20220311105336.jpg?yocs=D_NA_" alt=""/>
<h3>Butik</h3>
   </div>
  <div class="item" style=""> <img style="max-width: 500px !important;
    min-width: 350px !important;"  src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/SS22_MASS_FATHERS_DAY_PROMO_d4_20220608111906.jpg?yocs=D_NA_" alt=""/>
<h3>Butik</h3>
   </div>
  <div class="item" style=""> <img style="max-width: 500px !important;
    min-width: 350px !important;"  src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/orlando_psycho_FBIG_d4_20220311105336.jpg?yocs=D_NA_" alt=""/>
<h3>Butik</h3>
   </div>
  <div class="item" style=""> <img style="max-width: 500px !important;
    min-width: 350px !important;"  src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/SS22_MASS_FATHERS_DAY_PROMO_d4_20220608111906.jpg?yocs=D_NA_" alt=""/>
<h3>Butik</h3>
   </div>
  <div class="item" style=""> <img style="max-width: 500px !important;
    min-width: 350px !important;"  src="https://cdn-fsly.yottaa.net/555a305b2bb0ac71b9002d22/10ec148069090139fdee0ead9ecbf798.yottaa.net/v~4b.2a8.0.0/htmlcontent/orlando_psycho_FBIG_d4_20220311105336.jpg?yocs=D_NA_" alt=""/>
  <h3>Butik</h3> -->
  
</div>
  
</div>




<div class="feedback">
  <h2>Hvad synes du?</h2>
  <p>Har du ris eller ros? Vælg en smiley og fortæl om dit besøg. Vi vil rigtigt gerne høre om din oplevelse.</p>
  <!-- <div class="feedback-logo">
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg> <p>Titel</p></span>
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z"/></svg> <p>Titel</p></span>
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M256 368C256 403.7 266.6 436.9 284.9 464.6L279.4 470.3C266.4 483.2 245.5 483.2 233.5 470.3L39.71 270.5C-16.22 212.5-13.23 116.6 49.7 62.68C103.6 15.73 186.5 24.72 236.5 75.67L256.4 96.64L275.4 75.67C325.4 24.72 407.3 15.73 463.2 62.68C506.1 100.1 520.7 157.6 507 208.7C484.3 198 458.8 192 432 192C334.8 192 256 270.8 256 368zM576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368zM476.7 324.7L416 385.4L387.3 356.7C381.1 350.4 370.9 350.4 364.7 356.7C358.4 362.9 358.4 373.1 364.7 379.3L404.7 419.3C410.9 425.6 421.1 425.6 427.3 419.3L499.3 347.3C505.6 341.1 505.6 330.9 499.3 324.7C493.1 318.4 482.9 318.4 476.7 324.7H476.7z"/></svg> <p>Titel</p></span>
  </div> -->






  <div class="feedback-field">
    <div class="feedback-ani">
      <label class="angry">
          <input type="radio" value="1" name="feedback-ani" />
          <div>
              <svg class="eye left">
                  <use xlink:href="#eye">
              </svg>
              <svg class="eye right">
                  <use xlink:href="#eye">
              </svg>
              <svg class="mouth">
                  <use xlink:href="#mouth">
              </svg>
          </div>
      </label>
      <label class="sad">
          <input type="radio" value="2" name="feedback-ani" />
          <div>
              <svg class="eye left">
                  <use xlink:href="#eye">
              </svg>
              <svg class="eye right">
                  <use xlink:href="#eye">
              </svg>
              <svg class="mouth">
                  <use xlink:href="#mouth">
              </svg>
          </div>
      </label>
      <label class="ok">
          <input type="radio" value="3" name="feedback-ani" />
          <div></div>
      </label>
      <label class="good">
          <input type="radio" value="4" name="feedback-ani" checked />
          <div>
              <svg class="eye left">
                  <use xlink:href="#eye">
              </svg>
              <svg class="eye right">
                  <use xlink:href="#eye">
              </svg>
              <svg class="mouth">
                  <use xlink:href="#mouth">
              </svg>
          </div>
      </label>
      <label class="happy">
          <input type="radio" value="5" name="feedback-ani" />
          <div>
              <svg class="eye left">
                  <use xlink:href="#eye">
              </svg>
              <svg class="eye right">
                  <use xlink:href="#eye">
              </svg>
          </div>
      </label>
      
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 4" id="eye">
          <path d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1"></path>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 7" id="mouth">
        <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
      </symbol>
    </svg>
  </div>
  </div>
  
  <button class="feedback-button"> <a href="https://www.google.com/search?q=holb%C3%A6k+megacenter&oq=holb%C3%A6k+megacenter&aqs=chrome.0.69i59l2j69i60l3.5740j1j7&sourceid=chrome&ie=UTF-8#lrd=0x46527ea2bf055dc5:0x9c2f3f81e2db3724,1,,," target="_blank">
 Giv Feedback her </a>
</button>

</div>





















 
<div class="map-container"><div id="map">
  
<script>

/* 55.70358, 11.66980 */

  var map = L.map("map", {
  center: [55.70359383462109, 11.669764127748119], // Default latitude and longitude on start
  zoom: 16, // Between 1 and 18; decrease to zoom out, increase to zoom in
  scrollWheelZoom: false,
});

L.tileLayer(
  "https://tile.jawg.io/330abd19-0893-4c93-a14f-3d920e8859ec/{z}/{x}/{y}{r}.png?access-token=cdI4jnaibuKP80BMuP8DGlstWiuISQZBI7y8Lhi00NO3ZGD4zojaQwWeKybflPYs",
  {
    attribution:
      '&copy; <a href="http://www.thunderforest.com/">Thunderforest</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    provider: "Thunderforest.MobileAtlas",
    minZoom: 0,
    maxZoom: 22,
  }
  
).addTo(map);



/* var Jawg_Matrix = L.tileLayer(
    "https://{s}.tile.jawg.io/jawg-matrix/{z}/{x}/{y}{r}.png?access-token={accessToken}",
    {
      attribution:
        '<a href="http://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      minZoom: 0,
      maxZoom: 22,
      subdomains: "abcd",
      accessToken: "<your accessToken>",
    }
  ); */

 

L.marker([55.70359383462109, 11.669764127748119])
  .addTo(map)
  .bindPopup("Her bor vi")
  .openPopup();

  L.marker([55.7051474773282, 11.670568790440026])
  .addTo(map)
  .bindPopup("Butik")
  .openPopup();
  

var marker = L.marker([row.Latitude, row.Longitude], {
  opacity: 1,
  // Customize your icon
  icon: L.icon({
    iconUrl: "https://media.jawg.io/add-your-data/shop.png",
    iconSize: [80, 60],
  }),
}).bindPopup(row.Title);



    /* const accessToken = "cdI4jnaibuKP80BMuP8DGlstWiuISQZBI7y8Lhi00NO3ZGD4zojaQwWeKybflPYs";
    const map = new maplibregl.Map({
      container: "map",
      style: `https://api.jawg.io/styles/jawg-streets.json?access-token=${accessToken}`,
      zoom: 10,
      center: [2.3488, 48.8534],
      hash: true
    }).addControl(new maplibregl.NavigationControl(), "top-right");
    
    maplibregl.setRTLTextPlugin(
      "https://unpkg.com/@mapbox/mapbox-gl-rtl-text@0.2.3/mapbox-gl-rtl-text.min.js"
    );

    map.on("load", function() {
      
      map.loadImage(
        "https://media.jawg.io/add-your-data/shop.png",
        function(error, image) {
          if (error) throw error;
         
          map.addImage("custom-marker", image);

          
          map.addLayer({
            id: "shops",
            type: "symbol",
            source: {
              type: "geojson",
              data: "https://kastholm.github.io/MegacenterMaps/megacenter.geojson",
            },
            layout: {
              "icon-image": "custom-marker",
              "icon-anchor": "bottom"
            }
          });
        }
      );
    }); */


   

  </script></div></div>


<?php
the_content();
    ?>



<?php
get_footer()
?>