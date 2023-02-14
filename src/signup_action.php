<?php
    $name=$_POST['name'];
    $id=$_POST["id"];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    ?>
    <?php
    //mysql 접속
    $con=mysqli_connect("localhost","root","","login")or die("MySQL 접속 실패!");
    
    $sql="CREATE TABLE login_table(id_num INT NOT NULL AUTO_INCREMENT, name CHAR(30), id CHAR(30), password CHAR(30), nickname CHAR(30), email CHAR(30), PRIMARY KEY(id_num))";

    //form으로 받은 값을 db에 추가
    $insert_query="INSERT INTO login_table(name,id,password,nickname, email) VALUES('".$name."','".$id."','".$password."','".$nickname."','".$email."')";
    mysqli_query($con,$insert_query);
    
    //중복 확인
    $check_query="SELECT id FROM login_table WHERE id='".$id."'";
    $ret=mysqli_query($con,$check_query);
    $result=mysqli_num_rows($ret);
    if($result>0){
        echo("사용 불가능");
        echo($result);
    }
    else{
        echo("사용 가능");
        echo($result);
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