<?php
$week_days = [
    'Monday' => 'darbo diena',
    'Tuesday' => 'darbo diena',
    'Wednesday' => 'darbo diena',
    'Thurstay' => 'darbo diena',
    'Friday' => 'darbo diena',
    'Saturday' => 'savaitgalis',
    'Sunday' => 'savaitgalis',
];
//
//$week_days[4] = 'Black';
//var_dump($week_days);
//
//unset($week_days[4]);    
//var_dump($week_days);
//
//foreach ($week_days as $index_idx => $days) {
// if ($index_idx == 'Friday');{
//     $days = 'Friday yra gera diena';
// }
//};
//var_dump($days);


foreach ($week_days as $index_idx => $days) {
    if ($days == 'darbo diena') {
        $week_days[$index_idx] = [
            'Keliamės 6:00',
            'Sporto klubas',
            'Rytinis kamštis',
            'Code Academy',
            'Vakarinis kamštis',
            'Netflix'
        ];
    }
};

var_dump($week_days);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis</title>
    </head>
    <body>
        <h1></h1>
        <ul>
        </ul>
    </body>
</html>





<!--
//foreach ($mano_atmintis as $rezultatas){
//     if (!in_array($rezultatas, $tuscias_masyvas)) {
//            $tuscias_masyvas[] = $rezultatas;
//        } else {
//            print $rezultatas. '<br />';   
-->





