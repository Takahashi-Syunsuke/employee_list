<?php
  // Employeeクラスの記述
  Class Employee{
    private $id;
    private $name;
    private $belong;
    private $tel;
    private $enter;
    private $remark;
    
    function __construct($id, $name, $belong, $tel, $enter, $remark){
      $this->id     = $id;
      $this->name   = $name;
      $this->belong = $belong;
      $this->tel    = $tel;
      $this->enter  = $enter;
      $this->remark = $remark;
    }

    public function show(){
      $id     = $this->id;
      $name   = $this->name;
      $belong = $this->belong;
      $tel    = $this->tel;
      $enter  = $this->enter;
      $remark = $this->remark;
      return array($id, $name, $belong, $tel, $enter, $remark);
    }
  }
  // 表のインデックスを定義
  $e0 = new Employee("社員番号", "社員名", "所属部門", "連絡先", "入社日", "備考");
  $index = $e0->show();
  // 社員情報を定義
  $e1 = new Employee("001", "山田 太郎", "ITエンジニア職", "090-###-###", "2018/4/1", "なし");
  $employees[] = $e1->show();
  $e2 = new Employee("002", "鈴木 花子", "ITエンジニア職", "090-###-###", "2019/4/1", "なし");
  $employees[] = $e2->show();
  $e3 = new Employee("003", "佐藤 次郎", "ITエンジニア職", "080-###-###", "2019/4/1", "なし");
  $employees[] = $e3->show();
  $e4 = new Employee("004", "高橋 好子", "ITエンジニア職", "090-###-###", "2020/4/1", "なし");
  $employees[] = $e4->show();
  $e5 = new Employee("005", "田中 三郎", "ITエンジニア職", "080-###-###", "2020/4/1", "なし");
  $employees[] = $e5->show();
?>

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
      <a class="btn-new" href="/new.php">新規登録</a>
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