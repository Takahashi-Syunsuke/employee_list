<!DOCTYPE html>
<html>
  <head>
    <title>社員リスト</title>
    <link rel="stylesheet" type="text/css" href="/stylesheet.css">
    <script src="/jquery-3.5.1.min.js"></script>
    <script src="/script.js"></script>
  </head>

  <body>
    <div class="header color-main">
      <h1 class="header__title-main">NECO COMPANY</h1>
      <h2 class="header__title-sub">社員リスト</h2>
      <a class="header__btn_logout btn-small" href=login.php>ログアウト</a>
    </div>

    <div class="main color-sub">
      <h2>新規登録</h2>
      <form method="post" action="index.php">
        <div class="main__form-wrapper main__form-wrapper_flag">
          <p class="main__form-wrapper_label">社員番号</p>
          <input class="form" id="form-id" type="text" name="id" value="006">
        </div>
        <div class="main__form-wrapper main__form-wrapper_flag">
          <p class="main__form-wrapper_label">社員名</p>
          <p class="main__form-wrapper_label font-mini">氏名の間に半角スペースを入力してください（山田 太郎）</p>
          <input class="form" id="form-name" type="text" name="name">
        </div>
        <div class="main__form-wrapper main__form-wrapper_flag">
          <p class="main__form-wrapper_label">所属部門</p>
          <select class="form form-select" name="belong">
            <option value="介護職">介護職</option>
            <option value="ITエンジニア職">ITエンジニア部</option>
          </select>
        </div>
        <div class="main__form-wrapper main__form-wrapper_flag">
          <p class="main__form-wrapper_label">連絡先（携帯）</p>
          <p class="main__form-wrapper_label font-mini">半角ハイフンを入力してください（090-####-####）</p>
          <input class="form" id="form-tel" type="text" name="tel">
        </div>
        <div class="main__form-wrapper main__form-wrapper_flag">
          <p class="main__form-wrapper_label">入社日</p>
          <p class="main__form-wrapper_label font-mini">半角スラッシュを入力してください（2020/4/1）</p>
          <input class="form" id="form-enter" type="text" name="enter">
        </div>
        <div class="main__form-wrapper form-wrapper-last">
          <p class="main__form-wrapper_label">備考</p>
          <p class="main__form-wrapper_caution font-mini"></p>
          <textarea class="form form-textarea" name="remark"></textarea>
        </div>
        <div class="main__btn-flag">
          <p class="main__btn-msg color-accent">入力完了後、送信ボタンが表示されます</p>
        </div>
      </form>
    </div>

    <div class="msg color-main">
      <a class="msg__item_btn btn-circle" href="index.php">TOPへ</a>
    </div>

    <div class="footer color-sub font-mini">Copyright ©️NECO. All Rights Reserved.</div>
  </body>
</html>