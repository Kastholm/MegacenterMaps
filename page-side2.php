<?php
get_header()
?>


<div class="top-banner">
     <h1> <?php echo the_title() ?></h1>
</div>

<div class="shop-grid">
                         <?php 
                                query_posts(array( 
                                    'post_type' => array('butikker', 'madogdrikke', 'shopping'),
                                    'showposts' => 100,
                                    'orderby'=>'title','order'=>'ASC'
                                ) );  
                                $title_2 = '0';
                            ?>
                            <?php while (have_posts()) : the_post(); ?> 
                            
                            <?php
                                    $title = get_the_title();
                                    $title_1 = $title[0];
                                    if ($title_1 !== $title_2){
                                        echo '<li class="letter"><h2>' . $title_1 . '.</h2></li>';
                                        $title_2 = $title_1;
                                    }
                                    ?>                              
                                    <div class="test"> <li><a href="<?php echo get_the_permalink(); ?>"><div class="item" style=""> 
        <img src= <?php echo the_post_thumbnail_url() ?> /> 
        <h3><a href="<?php echo the_permalink();?>"> <?php the_title(); ?></a></h3>
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
                    
                } ;
              }; 
              
              $termsClosed = get_terms([
                'taxonomy' => $taxonomy = 'Lukketider',
                'hide_empty' => true,
            ]);
             foreach ($termsClosed as $term){
    
                if($term->name === get_the_title()) {
                        
                    } ;
              };

              if(date("H:i") < $term/* lukke 20 */->description && date("H:i") > $termo/* åbne */->description ) { 
             
                ?> <p class="butik-status"> <?php  echo "Åben"  ; ?> </p>  <?php
                
              }else {
                ?> <p class="butik-status-two"> <?php  echo "Lukket"; ?> </p> <?php
                /* echo $term->description;
                echo date("H:i");
                echo $termo->description; */
              }
            ?> </div>  </a></li></div>
                                <?php endwhile;?>
                            </div>










<?php
the_content();
    ?>



<?php
get_footer()
?>