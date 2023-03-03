<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">

</head>

<body>

    <?php
        $msc1_nome = file("data/msc1.txt")[0];
        $msc1_autor = file("data/msc1.txt")[1];
    ?>


    <img id="img" src="img/img.png"></img>
    <div id="bg_card2">
        <div id="title_card"><?php echo $msc1_nome; ?></div>
        <div id="subtitle_card"><?php echo $msc1_autor; ?></div>
    </div>

</body>

</html>