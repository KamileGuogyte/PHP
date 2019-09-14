<?php

?> 
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <h1>
          <?php print 'PHP lydės ir' . ' ' . 
                  date('Y-m-d', strtotime('+' . (rand(1, 10) . 'year') . (rand(1, 12) . 'months') . (rand(1, 28) . 'days'))); ?>  
        </h1>
        <p>
             <?php print 'PHP lydės ir' . ' ' . date('Y-m-d', strtotime('+' . rand(1, 3600). 'days')) ?>  
        </p>
    <p> 
       Kamilė - <?php print 'galbūt turėsiu ' . rand(1, 5) . ' vaikus'; ?>
    </p>
        <p><?php print 'Trumpas nebebus prezidentu nuo' . date(' Y-m-d', strtotime('+' . rand(2, 10). 'year')); ?></p>
          <p><?php print date('Y', strtotime('+1 year')); ?> ne už kalnų!</p>
</body>
</html>


