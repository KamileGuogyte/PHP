<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+' . rand(1, 10) . 'year' . '+' . rand(1, 12) . 'month' . '+'. rand(1, 28) .'day')); ?></title>
    </head>
    <body>
        <h1>
            Kamilė - Galbūt turėsiu <?php print rand(1, 5); ?> vaikus
        </h1>
        <p>
           Trumpas nebebus prezidentu <?php print date('Y-m-d', strtotime('+'. rand(2, 10). 'year')); ?>
        </p>
       
    </body>
</html>



        
     