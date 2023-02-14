<?php
    $name=$_POST['name'];
    $id=$_POST["id"];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];

    //mysql 접속
    $con=mysqli_connect("localhost","root","","login")or die("MySQL 접속 실패!");
    
    //중복 확인
    $check_query="SELECT * FROM login_table WHERE id='".$id."'";
    $ret=mysqli_query($con,$check_query);
    $result=mysqli_num_rows($ret);
    if($result==1){
        echo "<script>alert('이미 존재하는 아이디입니다!');</script>";
        echo "<script>location.href = 'Signup.php';</script>";
    }
    else{
        echo "<script>alert('회원가입 완료!');</script>";
        echo "<script>location.href = 'index.php';</script>";
        //form으로 받은 값을 db에 추가
        $insert_query="INSERT INTO login_table(name,id,password,nickname, email) VALUES('".$name."','".$id."','".$password."','".$nickname."','".$email."')";
        mysqli_query($con,$insert_query);
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