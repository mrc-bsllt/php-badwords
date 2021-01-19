<?php
  $text =
"
Osteria N.1 in casin non c’è nessuno... ci son solo preti e frati che si inculano beati dammela a me biondina dammela a me biondaa...<br>
Osteria N.2 le mie gambe fra le tue,le tue gambe fra le mie fanno mille porcherie dammela a me biondina dammela a me biondaa...<br>
Osteria N.3 la peppina fa il caffè, fa il caffè alla tirolese con le pezze del marchese dammela a me biondina dammela a me biondaa...<br>
Osteria N.4, la marchesa aveva un gatto, con la coda del felino si faceva un ditalino dammela a me biondina dammela a me biondaa...<br>
Osteria N.5 c’è chi perde e c’è che vince, ma chi perde caso strano se lo trova dentro l’ano dammela a me biondina dammela a me biondaa...<br>
Osteria N.7, il salame piace a fette, ma alle donne caso strano il salame piace sano dammela a me biondina dammela a me biondaa...<br>
Osteria N.20 se la figa avesse i denti, quanti cazzi all’ospedale quante fighe in tribunale dammela a me biondina dammela a me biondaaa...<br>
Osteria N.30, chi dà il culo non si penta, oggigiorno caso strano va di moda il deretano dammela a me biondina dammela a me biondaa...<br>
Osteria N.100,se la figa andasse a vento... quanti cazzi in alto mare tu vedresti navigare dammela a me biondina dammela a me biondaa...<br>
Osteria degli untori, hanno tutti il cazzo fuori, e li danno alle colleghe per non farsi delle seghe dammela a me biondina dammela a me biondaaaaa.
";
  $words_to_replace = ["inculano", "porcherie", "ditalino", "ano", "figa", "cazzo", "cazzi", "culo", "deretano", "seghe"];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>php bad words</title>
 </head>

 <body>
   <h2>Testo originale</h2>
   <p><?php echo $text; ?></p>

   <h2>Testo censurato</h2>
   <p><?php echo str_replace($words_to_replace, $_GET["word"], $text); ?></p>
 </body>
 </html>
