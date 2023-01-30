<?php
    $id=$_POST["id"];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    ?>
    <?php
    $con=mysqli_connect("locahost","root","","login");
    if($con){
        echo "connect succes!";
    }
    else{
        echo "connect false!";
    }
    ?>

    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>id : <?php echo $id ?></p>
        <p>password : <?php echo $password ?></p>
        <p>nickname : <?php echo $nickname ?></p>
        <p>email : <?php echo $email ?></p>
    </body>
    </html>