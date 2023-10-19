<?php
include('db.php');
if (isset($_POST['user_id']) && isset($_POST['user_nick']) && isset($_POST['user_pass1']) && isset($_POST['user_pass2'])) {
    //보안을 더욱 강화(시큐어코딩 , 보안코딩)
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_nick = mysqli_real_escape_string($db, $_POST['user_nick']);
    $user_pass1 = mysqli_real_escape_string($db, $_POST['user_pass1']);
    $user_pass2 = mysqli_real_escape_string($db, $_POST['user_pass2']);

    //에러를 체크
    if (empty($user_id)) {
        // echo "<script>
        // alert('아이디가 비어있어요');
        // history.back();
        // </script>";

        header("location: registerView.php?error=학번가 비어있어요");
        exit();
    } else if (empty($user_nick)) {

        header("location: registerView.php?error=이름이 비어있어요");
        exit();
    } else if (empty($user_pass1)) {
        header("location: registerView.php?error=비밀번호가 비어있어요");
        exit();
    } else if (empty($user_pass2)) {
        header("location: registerView.php?error=비밀번호확인이 비어있어요");
        exit();
    } else if ($user_pass1 !== $user_pass2) {
        header("location: registerView.php?error=비밀번호가 일치 하지 않아요");
        exit();
    } else {
        //암호화
        $user_pass1 = password_hash($user_pass1, PASSWORD_DEFAULT); //비번 암호화

        //아이디 또는 닉네임 또니ㅡㄴ 아이디와 동시에 닉네임 중복체크
        $sql_same = "SELECT * FROM member WHERE mb_id = '$user_id' and mb_nick = '$user_id'";
        $order = mysqli_query($db, $sql_same);

        if (mysqli_num_rows($order) > 0) {
            header("location: registerView.php?error=아이디 또는 닉네임이 이미 있어요");
            exit();
        } else {
            $sql_save = "insert into member(mb_id, mb_nick, password) values('$user_id','$user_nick','$user_pass1')";
            $result = mysqli_query($db, $sql_save);
            if ($result) {
                header("location: registerView.php?error=성공적으로 가입 되었습니다.");
                exit();
            } else {
                header("location: registerView.php?error=가입에 실패하였습니다.");
                exit();
            }
        }
    }
} else {
    header("location: registerView.php?error=알수 없는 오류가 발생하였습니다.");
    exit();
}
