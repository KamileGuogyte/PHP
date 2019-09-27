<?php

function slot_run($size) {
    $array = [];
    
    for ($x = 0; $x < $size; $x++) {
//         var_dump("Cia yra x-as $x");
        for ($y = 0; $y < $size; $y++) {
//             var_dump("cia yra y $y");
            $array[$x][$y] = rand(0, 1);
//            var_dump($array[$x][$y]);
        }
    }
    return $array;
  
}
  
$matrix = slot_run(2);
  var_dump($matrix);
 
 

$matrix_display = [];
foreach ($matrix as $row_idx => $row) {
    $matrix_display[$row_idx] = [
        'class' => 'winning',
        'columns' => []
    ];
    
//  var_dump($matrix_display[$row_idx]);

    foreach ($row as $column) {
        if ($column == 0) {
            $matrix_display[$row_idx]['columns'][] = [
                'class' => 'bg-blue',
            ];
        } else {
            $matrix_display[$row_idx]['columns'][] = [
                'class' => 'bg-yellow',
            ];
        }
      
    }
    
//    var_dump($matrix_display[$row_idx]);
}



?>
<html>
    <head>
        <title>Las vegas </title>
        <style>
            .row.winning {
                border: 1px solid red;
                
            }

            .column {
                display: inline-block;
                width: 50px;
                height: 50px;
                border: 1px solid black;
            }

            .bg-blue {
                background-color: blue;
            }

            .bg-yellow {
                background-color: yellow;
            }

        </style>
    </head> 
    <body>
        <div class="slot-container">
            <?php foreach ($matrix_display as $row): ?>
            <?php var_dump($row); ?>
                <div class="row <?php print $row['class']; ?>">
                    <?php foreach ($row['columns'] as $column): ?>
                   
                        <div class="column <?php print $column['class']; ?>"></div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>


