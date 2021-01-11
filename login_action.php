<?php
    session_start();

    $connect = mysqli_connect('localhost', 'root', '', 'board') or die ("Fail");
    
    //Id와 Pw 입력받기
    $id = $_GET['id'];
    $pw = $_GET['pw'];

    //아이디 존재 여부 검사
    if (mysqli_num_rows($result)==1) {
        $row=mysqli_fetch_assoc($result);

        //비밀번호가 맞다면 세션을 생성
        if($row['pw']==$pw){
            $_SESSION['userid'] = $id;
            if(isset($_SESSION['userid'])){
            
            ?>
            }
        }
    }
?>