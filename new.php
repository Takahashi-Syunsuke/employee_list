<!DOCTYPE html>
<html>
  <head>
    <title>社員リスト</title>
    <link rel="stylesheet" type="text/css" href="/stylesheet.css">
    <script src="/script.js"></script>
  </head>

  <body>
    <div class="header">
      <p class="title-main">『 NECO COMPANY 』<span class="title-sub">社員リスト</span></p>
      <a class="btn-logout" href=login.php>ログアウト</a>
    </div>

    <div class="main">
      <h2>社員一覧</h2>
      <div class="table-wrapper">
        <table border="1">
          <?php
            echo "<tr>";
              for($i=0; $i<count($index); $i++) echo "<th>$index[$i]</th>";
            echo "</tr>";

            foreach($employees as $e){
              echo "<tr>";
                for($i=0; $i<=1; $i++) echo "<td><a href='#'>$e[$i]</a></td>";
                for($i=2; $i<count($index); $i++) echo "<td>$e[$i]</td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
      <a class="btn-new" href="#">新規登録</a>
    </div>

    <div class="msg">
      <p class="msg-title">新規登録 社員<span>New!!</span></p>
      <?php
        for($i=1; $i<=2; $i++){
          $last_e_name = $employees[(count($employees)-$i)][1];
          echo "<p><a href='#'>$last_e_name</a></p>";
        }
      ?>
    </div>

    <div class="footer">Copyright ©️NECO. All Rights Reserved.</div>
  </body>
</html>