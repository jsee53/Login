<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Signup.css">
    <title>Login</title>
  </head>
  <body>
    <div class="signUp">
      <div class="form_box">
        <form action="signup_action.php" method="post">
          <div class="signUp_title">회원가입</div>
          <div class="input_id"></div>
          <input
            type="text"
            placeholder="이름"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = '이름'"
            name="name"
          />
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
          <input
            type="text"
            placeholder="상태메시지 (다른 사람에게 보이고 싶은 한마디)"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = '상태메시지 (다른 사람에게 보이고 싶은 한마디)'"
            name="nickname"
          />
          <input
            type="text"
            placeholder="이메일"
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = '이메일'"
            name="email"
          />
          <br />
          <input
            type="submit"
            class="submit"
            value="회원가입"
          />
        </form>
      </div>
      <div class="login">
        계정이 이미 있는 경우에는 <a href="index.php">로그인</a>해주세요.
      </div>
    </div>
  </body>
</html>