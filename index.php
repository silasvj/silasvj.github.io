<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,900;1,300;1,500;1,700&display=swap');
    
    body {
        margin: 0;
    }

    @keyframes mymove {
        0% {
            left: -400px;
            opacity: 0;
        }

        100% {
            left: -8px;
            opacity: 1;
        }
    }

    #title_card {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #fff;
    }

    #subtitle_card {
        font-family: 'Montserrat', sans-serif;
        font-size: 32px;
        font-weight: 300;
        font-style: italic;
        color: #0ff;
        margin-top: -8px;
    }

    #img {
        position: absolute;
        width: 800px;
        top: 200px;
        clip-path: inset(180px 0px 160px 0px round 0px 60px 60px 0px);
        animation: mymove;
        animation-duration: 2s;
        animation-timing-function: ease-in-out;
    }

    #bg_card2 {
        position: absolute;
        top: 380px;
        margin: 0 0;
        padding: 8px 60px 8px 80px;

        animation: mymove;
        animation-duration: 2s;
        animation-timing-function: ease-in-out;
    }
    </style>

</head>

<body>

    <?php
        $msc1_nome = file("msc1.txt")[0];
        $msc1_autor = file("msc1.txt")[1];
    ?>


    <img id="img" src="img.png"></img>
    <div id="bg_card2">
        <div id="title_card"><?php echo $msc1_nome; ?></div>
        <div id="subtitle_card"><?php echo $msc1_autor; ?></div>
    </div>

</body>

</html>