<?php
  $text =
  "
    Osteria N.1 in casin non c’è nessuno... ci son solo preti e frati che si <span>inculano</span> beati dammela a me biondina dammela a me biondaa...<br>
    Osteria N.2 le mie gambe fra le tue,le tue gambe fra le mie fanno mille <span>porcherie</span> dammela a me biondina dammela a me biondaa...<br>
    Osteria N.3 la peppina fa il caffè, fa il caffè alla tirolese con le pezze del marchese dammela a me biondina dammela a me biondaa...<br>
    Osteria N.4, la marchesa aveva un gatto, con la coda del felino si faceva un <span>ditalino</span> dammela a me biondina dammela a me biondaa...<br>
    Osteria N.5 c’è chi perde e c’è che vince, ma chi perde caso strano se lo trova dentro l’<span>ano</span> dammela a me biondina dammela a me biondaa...<br>
    Osteria N.7, il salame piace a fette, ma alle donne caso strano il salame piace sano dammela a me biondina dammela a me biondaa...<br>
    Osteria N.20 se la <span>figa</span> avesse i denti, quanti <span>cazzi</span> all’ospedale quante fighe in tribunale dammela a me biondina dammela a me biondaaa...<br>
    Osteria N.30, chi dà il <span>culo</span> non si penta, oggigiorno caso strano va di moda il <span>deretano</span> dammela a me biondina dammela a me biondaa...<br>
    Osteria N.100,se la <span>figa</span> andasse a vento... quanti <span>cazzi</span> in alto mare tu vedresti navigare dammela a me biondina dammela a me biondaa...<br>
    Osteria degli untori, hanno tutti il <span>cazzo</span> fuori, e li danno alle colleghe per non farsi delle <span>seghe</span> dammela a me biondina dammela a me biondaaaaa.
  ";
  $words_to_replace = ["inculano", "porcherie", "ditalino", "deretano", "figa", "cazzo", "cazzi", "culo", "ano", "seghe"];

  $words_to_replace_new = array_map(
    function($value) {
    return "/\b".$value."\b/";
  }, $words_to_replace);

  $censured_text = preg_replace($words_to_replace_new, $_GET["word"], $text);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yusei+Magic&display=swap" rel="stylesheet">
   <!-- foglio di stile personale -->
   <link rel="stylesheet" href="css/style.css">
   <title>php bad words</title>
 </head>

 <body>

   <h2>Testo originale</h2>
   <div class="container">
     <p><?php echo $text; ?></p>
     <div class="length">
      <span><?php echo strlen($text); ?></span>
      <span>Caratteri</span>
     </div>
   </div>

   <h2>Testo censurato</h2>
   <div class="container">
     <p><?php echo $censured_text; ?></p>
     <div class="length">
       <span><?php echo strlen($censured_text); ?></span>
       <span>Caratteri</span>
     </div>
   </div>
 </body>
 </html>
