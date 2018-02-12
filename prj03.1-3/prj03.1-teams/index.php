<!DOCTYPE html>
<!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
       <h1><a href="view.index.php">Hidden Test</a></h1>
       <?php

        // get rid of nasty Notice
        error_reporting(E_ALL & ~E_NOTICE);

        if ($_POST['id']) 
                echo 'id: ' . $_POST['id'] ;
        else 
                echo "nothing";
        ?>
    </body>
</html>