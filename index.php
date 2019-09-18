
<?php

$mano_atmintis = ["penktadienis", "paskaita", "baras", "kavinė", "šokiai", "kokteiliai", "kelionė", "skrydis", "jūra"];

?>
<html>
    <body>
           <h1>Kas buvo penktadienį?</h1>
             <h1><?Kamilė atmintis </h1>
               <ul><?php foreach($mano_atmintis as $value){ ?></ul>
                 <li><?php print "$value <br>";} ?></li>           
    </body>
</html>


