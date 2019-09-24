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

$availability = 'Nera sandelyje';

foreach ($drinks as $drink_key => $drink) {
    $drinks[$drink_key]['price_retail'] = number_format($drink['price_stock'] - ($drink['price_stock'] * $drink['discount'] / 100), 2);
    $drink_retail_price = number_format($drink['price_stock'], 2);

    $drinks[$drink_key]['in_stock'] = rand(0,1);  

}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gerimai</title>
        <style>
            .drinks-section {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            h1 {
                text-align: center;
            }

            .drink-card {
                display: inline-block;
                border: 1px solid black;
                position: relative;
                height: 350px;
            }

            img {
                height: 280px;
                width: 280px;
            } 

            .retail-price {
                background-color: #FF69B4;
                color: white;
                position: absolute;
                top: 0;
                right: 0;
            }

            .retail-price-bigger {
                background-color: #FF69B4;
                color: white;
                position: absolute;
                padding: 4px;
                top: 0;
                right: 0;
            }

            .stock-price {
                background-color: grey;
                color: white;
                position: absolute;
                top: 0;
                left: 0;
            }

            .drink-name {
                text-align: center;
            }

           
            .availability {
                color: red;
                text-align: center;
            }

        </style>
    </head>
    <body>
        <h1>Drink Catalogue</h1>
        <div class="drinks-section">
            <?php foreach ($drinks as $drink_key => $drink): ?>
                <div class ="drink-card">
                    <?php if ($drink['discount'] > 0) : ?>
                        <div class="stock-price">$ <?php print $drink_retail_price; ?></div>
                        <div class="retail-price-bigger">$ <?php print $drink['price_retail']; ?></div>
                    <?php else: ?>
                        <div class="retail-price">$ <?php print $drink['price_retail']; ?></div>
                    <?php endif; ?>
                    <img src="<?php print $drink['img']; ?>" >
                    <p class="drink-name"><?php print $drink['name']; ?></p>
                    <?php if (!$drink['in_stock']) : ?>
                        <p class="availability"><?php print $availability; ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>