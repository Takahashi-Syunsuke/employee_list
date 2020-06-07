<!DOCTYPE html>
<html>
  <head>
    <title>社員リスト</title>
    <link rel="stylesheet" type="text/css" href="/stylesheet.css">
    <script src="/script.js"></script>
  </head>

  <body>
    <div class="header color-main">
      <h1 class="header__title-main">NECO COMPANY</h1>
      <h2 class="header__title-sub">社員リスト</h2>
      <a class="header__btn_logout btn-small" href=#>新規登録</a>
    </div>

    <div class="main color-sub">
      <h2>ログイン</h2>
      <div class="main__form-wrapper-login">
        <form method="post" action="login.php">
          <div class="main__form-wrapper-login_item">
            <p class="main__form-wrapper_label">メールアドレス</p>
            <input class="form" type="text" name="mail">
          </div>
          <div class="form-wrapper-last">
            <p class="main__form-wrapper_label">パスワード</p>
            <input class="form" type="password" name="pass">
          </div>
          <input class="main__btn_link btn-large color-accent" type="submit" value="送信">  
        </form>
      </div>

      <?php
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        if(!empty($mail) && !empty($pass)){
          if($mail == "aaa@aaa" && $pass == "aaa"){
            echo "<h4>さぁ、はじめよう!</h4><br>";
            echo "<a class='main__btn_link btn-large color-main' href='index.php'>トップへ</a>";
          }else{
            echo "<h4>入力に誤りがあります</h4>";
          }
        }
      ?>
    </div>

    <div class="msg color-main"></div>

    <div class="footer color-sub font-mini">Copyright ©️NECO. All Rights Reserved.</div>
  </body>
</html>