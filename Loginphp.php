<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    /* a.register {
        text-decoration: none;
        color: #9B9B9B;
        font-size: 12px;
    } */
</style>
<body>
    <form action="login_server.php" method="post">
        <div id="container" class="login">
            <h1>
                <a href="/teamproject/LoginP.html" class="logo">수강신청 로그인</a>
            </h1>
            
            <div id=loginM>
                
                <p class="loginId">
                    <input type="text" name="user_id" maxlength="20" class="In" placeholder="아이디">
                </p>
                <p class="loginPw">
                    <input type="password" name="user_pass1" maxlength="20" class="In" placeholder="비밀번호">
                </p>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <button class ="btn" type=" submit" name="login_btn">로그인</button></br>
                <a href="https://tcmssso.bu.ac.kr/bu/biz/IdFindForm.eps?id=bu_tcms">아이디/비밀번호 찾기</a></br>
                <a class="register" href="registerView.php">회원가입</a>
            </div>
        </div>
    </form>
</body>

</html>