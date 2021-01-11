<?php
    $connect = mysqli_connect("localhost", "root", "", "board") or die ("fail");

    $id=$_GET[id];
    $pw= $_GET[pw];
    $email = $_GET[email];

    $date = date('Y-m-d H:i:s');

    $query = "insert into member (id, pw, email, date, permite) values ('$id', '$pw', '$email', '$date', 0)";

    $result = $connect->query($query);

    if ($result) {
        ?>                    
        <script>
            alert("가입 되었습니다.");
            location.replace("./login.php");
        </script>
<?php   
    }
    else{
?>
    <script>
        alert("Fail");
    </script>
<?php

   }
   
    mysqli_close($connect);
?>