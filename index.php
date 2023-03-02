<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>

  <style>

  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,900;1,300;1,500;1,700&display=swap');
    

  .title{
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #0ff;
  }
  </style>

</head>
<body>

  <?php
    $msc1_nome = file("msc1.txt")[0];
    $msc1_autor = file("msc1.txt")[1];
  ?>

  <?php
    if (isset($_POST['msc1_nome'])) {
      if (isset($_POST['msc1_autor'])) {
        $msc1_nome=$_POST['msc1_nome'];
        $msc1_autor=$_POST['msc1_autor'];

        unlink('msc1.txt');
        $fp3 = fopen('msc1.txt', 'a+');
        fwrite($fp3, $msc1_nome."\n".$msc1_autor);
        fclose($fp3);

      }
    }
  ?>

  <form method="post">
    Música 1:<br>
    <input type="text" name="msc1_nome" value="<?php echo $msc1_nome; ?>"><br>
    <input type="text" name="msc1_autor" value="<?php echo $msc1_autor; ?>"><br>
    <input type="submit" name="submit"><br>
  </form>

  <?php
    echo '<div class="title">'.$msc1_nome.'</div>';
    echo '<div class="title">'.$msc1_autor.'</div>';
  ?>

</body>
</html>

