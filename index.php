<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- CSS: FONTAWESOME -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <!-- GOOGLE FONT : ROBOTO -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
     <!-- CSS: MY CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- JS: JQUERY -->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- JS: MOMENT -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
     <!-- JS: CHART -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
     <!-- JS: HANDLEBARS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
     <!-- JS: MY TEMPLATE -->
     <script id="template" type="text/x-handlebars-template">
     </script>
     <!-- JS: MY JS -->
     <script type="text/javascript" src="script.js"></script>
     <title></title>
   </head>
   <body>

     <?php

      function randomImg() {

        $imgs = ["https://www.faige.it/wp-content/uploads/2018/03/berlin-la-casa-de-papel-4.jpg.png", "https://o.aolcdn.com/images/dims3/GLOB/crop/720x361+0+23/resize/630x315!/format/jpg/quality/85/http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2Fb55798773a41af6d294e478b55b82774%2F206290751%2Fcasa-di-carta.jpg", "https://www.repstatic.it/content/nazionale/img/2018/04/18/145829307-48f09ea6-af53-42b5-8aac-74461a4b58e5.jpg", "https://www.tvzoom.it/wp-content/uploads/2018/04/la-casa-de-papel.jpg", "https://images2.corriereobjects.it/methode_image/2018/07/28/Interni/Foto%20Interni%20-%20Trattate/casa-de-papel-profesor-k3CI--620x349@abc-kb9E-U30001255616255QXH-593x443@Corriere-Web-Sezioni.jpg?v=20180728223718"];

        $imgsLength = count($imgs);
        $rndNum = rand(1, $imgsLength-1);

        $img = $imgs[$rndNum];

        echo "<img src='$img'>";
      }

      randomImg();
     ?>
   </body>
 </html>
