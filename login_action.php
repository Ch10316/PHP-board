<?php
    session_start();

    $connect = mysqli_connect('localhost', 'root', '', 'board') or die ("Fail");
    $query = "select * from where id = ";
    $result = $connect->query($query);

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
            <script>
                alert("로그인이 되었습니다.");
                location.replace("./index.php");
            </script>
<?php
            }
            else{
                echo "session fail";
            }
        }    
        else{
            ?><script>
                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                history.back();
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                histroy.back();
            </script>
<?php
        }
?>