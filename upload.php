<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .alert {
            margin: 25px 0;
        }
    </style> 
    
    <meta http-equiv="refresh" content="2;url=index.php" />
    
    <title>Image Gallery</title>
  </head>
  <body>
    <div class="container">
        <?php
            require_once('classes/File.php');
            
            $img = new File();
            $img->upload($_FILES['image']);
        ?>
        <br>
        Redirecting in 3s...
    </div>
  </body>