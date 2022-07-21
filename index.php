<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
      //scrivo il paragrafo 
      $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.";
      // salvo la badward datami dall' utante
      $badworld = $_GET['badworld'];
      // salvo il nuovo paragrafo con il testo modificato
      $newparagraph = str_replace($badworld,"***",$paragraph); 
    ?>

    <h2><?php echo $paragraph ?></h2>
    <h2><?php echo strlen($paragraph) ?></h2>
    <h2><?php echo $newparagraph ?></h2>
    <h2><?php echo strlen($newparagraph) ?></h2> 
</body>
</html>