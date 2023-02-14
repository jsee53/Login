<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="login">
      <div class="form_box">
        <form action="login_action.php">
          <div class="login_title">로그인</div>
          <div class="input_id"></div>
          <input
            type="text"
            placeholder="아이디"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = '아이디'"
            name="id"
          />
          <input
            type="text"
            placeholder="비밀번호"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = '비밀번호'"
            name="password"
          />
          <br />
          <input type="submit" class="submit" value="로그인" />
        </form>
      </div>
      <div class="signUp">
        회원 가입은 <a href="Signup.php">여기</a>에서 할 수 있습니다.
      </div>
    </div>
  </body>
</html>
