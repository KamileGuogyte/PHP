<?php

  function add_one($var) {
      return ++$var;
  }
  
  print add_one(1)
  
  
  
  $x = 4
  $y = 2
  function add_some($x, $y) { deklaracija
      return ($x + $y)
  }
 
  print add_sum ($x, $y)
          
   
          
    $x = 4
          $y = 2
  function add_mode($x, $y) { deklaracija
      return $x
  }
 
  print add_mode ($x, $y)      (vienas skaicius)
          
          
     
              
    $x = 4
          $y = 2
  function add_mode(&$x, $y) { deklaracija
      return $x + $y
  }
 
  print add_mode ($x, $y)   bus 6    
          
          
      $x = 4
          $y = 2
  function add_mode(&$x, $y) { deklaracija
      return $x + $y
  }
 
  print $x   bus 4       
     
          
         $x = 4
          $y = 2
  function add_mode(&$x, &$y) { deklaracija
       $x= $x + $y
        $y= $y + $x
          
  }
 
  add_mode($x, $y);
  print "$x and $y"         
          
  ats: 6 and 8     
      
      
      
          $x = 4
          $y = 2
  function add_mode(&$x, &$y) { deklaracija
       $x += $y
        $y +=$x
          return "$x ans $y"
          
  }
 

  print ad_mode ($x ,$y )        
          
  ats: 6 and 8      
      
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>

        <h1><?php ?></h1> 


    </body>
</html>