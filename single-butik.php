<?php
get_header()
/*
Template Name: butik-single
Template Post Type: butikker, bilogreserve, shopping, husogmobler, madogdrikke
*/ 
?>




<div class='butik-banner'>
     <img src= <?php echo the_post_thumbnail_url() ?> alt="" />
</div>


<div class="shop-content">



<div>
<div class="contact-information">
    
    <h1><?php echo the_title() ?></h1>
    
    <span class='info-field'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"/></svg>
    <h4><?php 
        
        function openClose() {
        
            date_default_timezone_set("Europe/Copenhagen");

        $termOpen = get_terms([
                'taxonomy' => $taxonomy = 'Åbningstider',
                'hide_empty' => true,
            ]);


            // Mandag
             foreach ($termOpen as $termo){
                 /* if(page title og termo name samme, stop) {

                 } */
                 if($termo->name === get_the_title()) {
                    echo "Mandag-Fredag  ";
                     echo $termo->description;
                     echo " - ";
                } ;
              };
        
        $termsClosed = get_terms([
            'taxonomy' => $taxonomy = 'Lukketider',
            'hide_empty' => true,
        ]);
         foreach ($termsClosed as $term){

            if($term->name === get_the_title()) { /* Strictly Equal ??? */
                     echo $term->description;
                    echo "<br><br>";
                } ;
          };
          if(date("H") < $term/* lukke */->description && date("H") > $termo/* åbne */->description ) { 
               
            ?> <p class="butik-status"> <?php  echo "Åben"  ; ?> </p>  <?php
          return;
          } 
          ?> <p class="butik-status-two"> <?php  echo "Lukket"; ?> <?php
          /* echo $term/->description ; 
          echo date("H") ;  */
        
        }
        
        openClose()
        
        
        
        ?> </h4>



    <?php /* date_default_timezone_set("Europe/Copenhagen");
    echo "." . date("H:i"); */ ?> 
    
    <p>
         
    <?php /* echo date("m/d")   */?>
    
    
    </p>
    
    
    </span>
    
    <span class=""info-field>
        
       
    </span>
    
    
    
    <span class='info-field'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg>
    
    <h4><?php
    $termPhone = get_terms([
        'taxonomy' => $taxonomy = 'Telefon nr.',
        'hide_empty' => true,
    ]);

    foreach ($termPhone as $termo){
         
        if($termo->name === get_the_title()) {
                    echo $termo->name;
                    echo " - EXCERPT ";
                     echo $termo->description;
                    echo "<br><br>";
                } ;
      }; 
      
    ?></h4>
    







    <?php 

/* $hej = get_terms([
    'taxonomy' => $taxonomy = 'Lukketider',
    'hide_empty' => false,
]);
foreach ($hej as $term){
    if ($term->name = the_title()) {
    echo $term->description;
    
    echo "oyoyo";
};
};

 */


/* function lol() {

$termi = get_the_category('Bauhaus');
echo $termi->name;

    if ($term->name = the_title()) {
        
    }; 

};

 */

?> 


    </span>
     <?php
    
     
     ?>
</div>

     </div>

     
     
     
     




     
     <div class="contact-text">

<h4 class="type-tag"><?php echo get_post_type() ?></h4>
<h2><?php echo the_title() ?> - Holbæk Megacenter</h2>

<?php echo get_the_content( ) ?>

     </div>

</div>






<div class="map-container"><div id="map">
  
<script>

/* 55.70358, 11.66980 */

  var map = L.map("map", {
  center: [55.70359383462109, 11.669764127748119], // Default latitude and longitude on start
  zoom: 16, // Between 1 and 18; decrease to zoom out, increase to zoom in
  scrollWheelZoom: true,
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



   

  </script></div></div>




<?php
get_footer()
?>