<?php

$drinks = [ 
    [
        'name' => 'Vilkmergės alus',
        'price_stock' => 3.6,
        'discount' => 0,
        'img' => 'https://mgkolekcija.files.wordpress.com/2017/02/vilkmerges-apa.jpg',
    ],
    [
        'name' => 'Stumbro Degtinėla',
        'price_stock' => 11.79,
        'discount' => 5, 
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=e11360a3-0864-4441-b8da-9cbb8d189742',
    ],
      [
        'name' => 'Utenos alus',
        'price_stock' => 2,
        'discount' => 1,
        'img' => 'http://www.utenosalus.lt/image/products/UT_WEB_Produktu_foto_UT_BUTELIS_newnew.png',
    ],
    [
        'name' => 'Baltasis Vynas',
        'price_stock' => 25,
        'discount' => 7, 
        'img' => 'https://www.la-lomellina.com/wp-content/uploads/2018/07/MarcheseBIANCO_Montaggio.png',
    ],
  ];


foreach ($drinks as $drink_idx => $drink) {
    $drinks[$drink_idx]['price_retail'] = number_format($drink['price_stock'] * (1 - $drink['discount'] / 100), 2);
    $drinks[$drink_idx]['price_display_retail'] = '€' . $drinks[$drink_idx]['price_retail'];
    if ($drinks[$drink_idx]['price_retail'] < $drinks[$drink_idx]['price_stock']) {
        $drinks[$drink_idx]['price_display_wholesale'] = '€' . number_format($drinks[$drink_idx]['price_stock'], 2);
    } else {
        $drinks[$drink_idx]['price_display_wholesale'] = null;
    }
};

?>

<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .border {
                border: 2px solid black;
                display: inline-block;
                position: relative;
            }

            .drink-name {
                font-size: 1.4rem;
                text-align: center;
                width: 50%;
                margin: auto;
            }

            .drink-price-retail {
                position: absolute;
                top: 0;
                right: 0;
                background: #FF9999;
            }

            .drink-price-wholesale {
                position: absolute;
                top: 0;
                left: 0;
                background: #D3D3D3;
            }

            .drink-image {
                width: 200px;
                height: 200px;
            } 

        </style>
    </head>
    <body>
        <h1>Drink Catalogue</h1>
        <?php foreach ($drinks as $drink): ?>
            <div class="border">
                <span class="drink-price-retail"><?php print $drink['price_display_retail']; ?></span>
                <span class="drink-price-wholesale"><?php print $drink['price_display_wholesale']; ?></span>
                <img class = "drink-image" src = "<?php print $drink['img']; ?>">
                <div class = "drink-name"><?php print $drink['name']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>