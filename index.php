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

  // 新規登録から値を受け取り、社員情報を定義
  $n_id     = $_POST["id"];
  $n_name   = $_POST["name"];
  $n_belong = $_POST["belong"];
  $n_tel    = $_POST["tel"];
  $n_enter  = $_POST["enter"];
  $n_remark = $_POST["remark"];
  if(!empty($n_id)){
    $e6 = new Employee($n_id, $n_name, $n_belong, $n_tel, $n_enter, $n_remark);
    $employees[] = $e6->show();
  }
?>

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

    <div class="main color-sub main__flag">
      <h2>社員一覧</h2>
      <table class="main__table_decoration table" border="1">
        <?php
          echo "<tr class='main__table_tr'>";
            for($i=0; $i<count($index); $i++){
              echo "<th class='main__table_th th'>$index[$i]</th>";
            }
          echo "</tr>";

          foreach($employees as $e){
            echo "<tr class='main__table_tr'>";
              for($i=0; $i<=1; $i++){
                echo "<td class='main__table_td td'><a href='show.php'>$e[$i]</a></td>";
              }
              for($i=2; $i<count($index); $i++){
                echo "<td class='main__table_td td'>$e[$i]</td>";
              }
            echo "</tr>";
          }
        ?>
      </table>
      <a class="main__btn_link btn-large color-accent" href="new.php">新規登録</a>
    </div>

    <div class="msg color-main">
      <h4 class="msg__title">最近の更新</h4>
      <?php
        for($i=1; $i<=2; $i++){
          $last_e_name = $employees[(count($employees)-$i)][1];
          echo "<p class='msg__item'><a href='#'>{$last_e_name} さん</a></p>";
        }
      ?>
    </div>

    <div class="footer color-sub font-mini">Copyright ©️NECO. All Rights Reserved.</div>
  </body>
</html>