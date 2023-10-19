<?php
include('db.php');
if (isset($_POST['user_id']) && isset($_POST['user_pass1'])) {
    //보안을 더욱 강화(시큐어코딩 , 보안코딩)
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_pass1 = mysqli_real_escape_string($db, $_POST['user_pass1']);

    //에러를 체크
    if (empty($user_id)) {
        // echo "<script>
        // alert('아이디가 비어있어요');
        // history.back();
        // </script>";

        header("location: Loginphp.php?error=아이디가 비어있어요");
        exit();
    } else if (empty($user_pass1)) {
        header("location: Loginphp.php?error=비밀번호가 비어있어요");
        exit();
    } else {
        //로그인 시키는 내용
        $sql = "select * from member where mb_id = '$user_id'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) === 1) {
            //로그인 시켜
            $row = mysqli_fetch_assoc($result);
            $hash = $row['password'];

            if (password_verify($user_pass1, $hash)) {
                header("location: index.html");
                exit();
            } else {
                header("location: Loginphp.php?error=로그인에 실패하였습니다.");
                exit();
            }
        } else {
            header("location: Loginphp.php?error=아이디가 잘못 입력되었습니다.");
            exit();
        }
    }
} else {
    header("location: Loginphp.php?error=알수 없는 오류가 발생하였습니다.");
    exit();
}
