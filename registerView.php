<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- <link rel="stylesheet" type="text/css" href="css/join_black.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/join.css"> -->
</head>
<style>
    #container {
        text-align: center;
    }

    div#loginM {
        margin: auto;
        width: 600px;
        height: 500px;
        background-color: #EEEFF1;
        border-radius: 5px;
        padding: 20px;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 5px;
        border: none;
    }

    .btn {
        background-color: #0431B4;
        margin-bottom: 100px;
        color: white;
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 5px;
        border: none;
    }

    h1 a.logo {
        color: inherit;
        text-decoration: none;
    }

    a.register {
        text-decoration: none;
        color: #9B9B9B;
        font-size: 12px;
    }
</style>

<body>
    <form action="register_server.php" method="post">
        <div id="container" class="login">
            <h2 class="logo">회원가입</h2>
            <div id=loginM>
                <p>
                    <input type="text" placeholder="학번" name="user_id">
                </p>
                <p>
                    <input type="text" placeholder="이름" name="user_nick">
                </p>
                <input type="password" placeholder="비밀번호" name="user_pass1">
                <p>
                    <input type="password" placeholder="비밀번호" name="user_pass2">
                </p>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <button class='btn' type=" submit">저장</button>
                <a href="Loginphp.php" class="save">이미 회원이신가요?(로그인 페이지)</a>
            </div>
        </div>
    </form>
</body>

</html>