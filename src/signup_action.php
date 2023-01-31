<?php
    $id=$_POST["id"];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    ?>
    <?php
    $con=mysqli_connect("localhost","root","","login")or die("MySQL 접속 실패!");
    // 한글 깨짐 관련
    mysqli_query($con, "set session character_set_connection=utf8;");
    mysqli_query($con, "set session character_set_results=utf8;");
    mysqli_query($con, "set session character_set_client=utf8;");
    
    $sql="CREATE TABLE login_data(ID CHAR(30), PASSWORD CHAR(30), NICKNAME CHAR(30), EMAIL CHAR(30))";

    //form으로 받은 값을 db에 추가
    $insert_query="INSERT INTO login_data(ID,PASSWORD,NICKNAME, EMAIL) VALUES('".$id."','".$password."','".$nickname."','".$email."')";
    if(mysqli_query($con,$insert_query)){
        echo "table 생성성공!";
    }
    else{
        echo "table 생성실패!";
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