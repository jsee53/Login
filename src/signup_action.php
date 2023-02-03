<?php
    $name=$_POST['name'];
    $id=$_POST["id"];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    ?>
    <?php
    $con=mysqli_connect("localhost","root","","login")or die("MySQL 접속 실패!");
    
    $sql="CREATE TABLE login_table(id_num INT NOT NULL AUTO_INCREMENT, name CHAR(30), id CHAR(30), password CHAR(30), nickname CHAR(30), email CHAR(30), PRIMARY KEY(id_num))";

    //form으로 받은 값을 db에 추가
    $insert_query="INSERT INTO login_table(name,id,password,nickname, email) VALUES('".$name."','".$id."','".$password."','".$nickname."','".$email."')";
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
        <p>name : <?php echo $name ?></p>
        <p>id : <?php echo $id ?></p>
        <p>password : <?php echo $password ?></p>
        <p>nickname : <?php echo $nickname ?></p>
        <p>email : <?php echo $email ?></p>
    </body>
    </html>