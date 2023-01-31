<?php
    $id=$_POST["id"];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    ?>
    <?php
    $con=mysqli_connect("localhost","root","","login")or die("MySQL 접속 실패!");
    
    $sql="CREATE TABLE login_data(ID CHAR(30), PASSWORD CHAR(30), NICKNAME CHAR(30), EMAIL CHAR(30))";
    $insert_query="INSERT INTO login_data(ID,PASSWORD,NICKNAME, EMAIL) VALUES(id,password,nickname,email)";
    
    mysqli_query($con,$insert_query);
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