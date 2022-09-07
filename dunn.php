<?php

get_header()
?>




<div class='butik-banner'>
     <img src="https://images.pexels.com/photos/135620/pexels-photo-135620.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  alt="" />

</div>


<div class="shop-content">



     <div>

<h1><?php echo the_title() ?></h1>

<span class='info-field'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"/></svg><p><?php date_default_timezone_set("Europe/Copenhagen");
echo "." . date("H:i"); ?> </p>

<p>
     
<?php echo date("m/d")  ?>


</p>



</span>

<p><?php 

function openClose() {

$termOpen = get_term($taxonomy = 'Åbningstider');
$termClosed = get_term(21);    

if(date("H") <= $termOpen) { 
     
echo "Åbent  " ; 
return;
} 
echo "Lukket  " ; 
}

openClose()



?> </p>



<span class='info-field'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg><p>Tlf1</p><p>Tlf2</p></span>


     </div>

     
     
     
     




     
     <div>

<h2><?php echo the_title() ?> hos Holbæk Megacenter</h2>

<p><span>Vi er en one-stop styling destination for modebevidste kvinder. Vi tilbyder kollektioner fra tre designatelier i Paris, Stockholm og Los Angeles bestående af en række produkter fra tøj, sko, tilbehør, smykker og skønhedsprodukter. Vores mål er at skabe kollektioner med gennemtænkte løsninger, der giver kvinder mulighed for at udtrykke deres personlighed og fortælle deres egen modehistorie på en ansvarlig måde.</span></p>
<p>&nbsp;</p>

<h4>Miljø- og samfundsansvar</h4>

<p><span>Vi tror på bæredygtig mode og opfordrer vores kunder til at genbruge med os. Returner tom skønhedsemballage, såvel som forvasket tøj og tekstiler af ethvert mærke til vores butik, og vær med i vores genvindingsprogram.</span></p>

<p><span>Som belønning for at genanvende med os, får vores kunder en rabatkupon på 10%, der er gyldig til et køb i butikken.</span></p>

<h4>Kunde-fordele</h4>

<p>Det glæder os, at du fandt os! Deltag i vores online nyhedsbrev, og hold dig opdateret med vores seneste nyheder og verden af garderobeskatte, og modtag 10% rabat på et køb i butikken ved sign up.</p>

<h4>
<br>
SCAN &amp; VIND!</h4>

<p>Husk at du kan scanne din kvittering fra &amp; Other Stories i FIELD'S PREMIUM app'en og vinde flotte præmier!<br>

<br>
FIELD’S PREMIUM er Field’s loyalitetsprogram, hvor vi belønner din loyalitet! Her finder du flotte præmier i vores lodtrækninger hver uge og hver måned, og hver gang du scanner en kvittering for et køb i Field’s, får du ét lod i ugens og månedens lodtrækning. Det vil sige, at desto flere kvitteringer, du scanner, desto større er dine vinderchancer! Derudover får du også 1 times ekstra gratis parkering HVER gang du besøger Field's, og så finder du flotte tilbud fra vores butikker og samarbejdspartnere. FIELD’S PREMIUM er vores måde at belønne dig som kunde i Field’s!&nbsp;</p>

<div>&nbsp;</div>

<h4>Find &amp; Other Stories</h4>

<p>&amp; Other Stories ligger på plan 1 i Fashion Quarter overfor Skechers. Den nærmeste indgang er Metro-indgangen. Kommer du i bil, kan du med fordel parkere i nærheden af C-tårnet og tage elevatoren til plan 1.&nbsp;</p>

     </div>

</div>










<?php
the_content();
    ?>



<?php
get_footer()
?>