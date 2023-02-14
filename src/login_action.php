<?php
    $id=$_POST["id"];
    $password=$_POST['password'];

    //mysql 접속
    $con=mysqli_connect("localhost","root","","login")or die("MySQL 접속 실패!");
    
    //아이디 존재확인
    $check_query="SELECT * FROM login_table WHERE id='".$id."'";
    $ret=mysqli_query($con,$check_query);
    $result=mysqli_num_rows($ret);
    if($result>0){ //아이디가 있다면 비밀번호 확인
        echo "<script>location.href = 'Welcome.php';</script>";


        echo("비밀번호를 확인해주세요!");
        echo "<script>location.href = 'index.php';</script>";
    }
    else{
        echo("아이디를 확인해주세요!");
        echo "<script>location.href = 'index.php';</script>";
    }
    ?>