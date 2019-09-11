<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bomb img game, and date()</title>
        <style>
            .bomb-imgA {
                background-image: url(http://pngimg.com/uploads/bomb/bomb_PNG16.png);
                background-size: cover;
                width: 1<?php print date('s') * 1.5; ?>px;
                height: 1<?php print date('s') * 1.5; ?>px;
            }
            .bomb-imgB00 {
                background-image: url(https://cdn4.iconfinder.com/data/icons/explosion/512/as_897-512.png);
                background-size: cover;
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <div class="bomb-imgA bomb-imgB<?php print date('s'); ?>"></div>
         <div><?php print date('s'); ?></div>
       
       
    </body>
</html>

