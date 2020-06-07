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
      <a class="header__btn_logout btn-small" href=login.php>ログアウト</a>
    </div>

    <div class="main color-sub">
      <h2>山田 太郎さんの詳細</h2>
      <table class="main__table_decoration table" border="1">
        <tr class="main__table_tr">
          <th class="main__table_th th">社員番号</th>
          <th class="main__table_th th">社員名</th>
          <th class="main__table_th th">社員名（かな）</th>
          <th class="main__table_th th">所属部門</th>
          <th class="main__table_th th">入社日</th>
          <th class="main__table_th th">生年月日</th>
          <th class="main__table_th th">住所</th>
          <th class="main__table_th th">連絡先番号</th>
          <th class="main__table_th th">性別</th>
          <th class="main__table_th th">自宅からの最寄り駅</th>
        </tr>
        <tr class="main__table_tr">
          <td class="main__table_td td">001</td>
          <td class="main__table_td td">山田 太郎</td>
          <td class="main__table_td td">やまだ たろう</td>
          <td class="main__table_td td">ITエンジニア職</td>
          <td class="main__table_td td">2018/4/1</td>
          <td class="main__table_td td">1996/10/10</td>
          <td class="main__table_td td">埼玉県さいたま市大宮区桜木町1-1-1</td>
          <td class="main__table_td td">090-####-###</td>
          <td class="main__table_td td">男性</td>
          <td class="main__table_td td">大宮駅</td>
        </tr>
      </table>
      <a class="main__btn_link btn-large color-accent" href="index.php">トップへ</a>
    </div>

    <div class="msg color-main">
      <h4 class="msg__title">スキル</h4>
      <p class="msg__item">PHP</p>
      <p class="msg__item">Ruby</p>
    </div>

    <div class="footer color-sub font-mini">Copyright ©️NECO. All Rights Reserved.</div>
  </body>
</html>