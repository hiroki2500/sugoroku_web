<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>コマの現在地</title>
  </head>
  <body>
    <h3>コマの現在地</h3>
    <span>プレイヤー1：</span>
    <?php echo $_POST["player1"]?>
    <span>プレイヤー2：</span>
    <?php echo $_POST["player2"]?>
    <span>プレイヤー3：</span>
    <?php echo $_POST["player3"]?>
    <span>プレイヤー4：</span>
    <?php echo $_POST["player4"]?>
    <script type="text/javascript">


    </script>

    <?php

    $dsn = 'mysql:host=localhost;dbname=sugoroku;charset=utf8';
    $user = 'sugoroku_user';
    $pass = 'maru2020';
    $current_position1 = $_POST["player1"];
    $current_position2 = $_POST["player2"];
    $current_position3 = $_POST["player3"];
    $current_position4 = $_POST["player4"];
    $countNumber1 = $_POST["countNumber1"];
    $countNumber2 = $_POST["countNumber2"];
    $countNumber3 = $_POST["countNumber3"];
    $countNumber4 = $_POST["countNumber4"];
    $playerNumber = $_POST["pn"];
    $nextPlayer = $_POST["nextpn"];
    $totalCount = $_POST["totalCount"];

    try{
      //DBへ接続
      $dbh = new PDO($dsn,$user,$pass,[
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]);

      $sql1 = "UPDATE current_position SET position=$current_position1 WHERE player=1";
      $res = $dbh->query($sql1);
      $sqlcn1 = "UPDATE current_position SET countNumber=$countNumber1 WHERE player=1";
      $res = $dbh->query($sqlcn1);

      $sql2 = "UPDATE current_position SET position=$current_position2 WHERE player=2";
      $res = $dbh->query($sql2);
      $sqlcn2 = "UPDATE current_position SET countNumber=$countNumber2 WHERE player=2";
      $res = $dbh->query($sqlcn2);

      $sql3 = "UPDATE current_position SET position=$current_position3 WHERE player=3";
      $res = $dbh->query($sql3);
      $sqlcn3 = "UPDATE current_position SET countNumber=$countNumber3 WHERE player=3";
      $res = $dbh->query($sqlcn3);

      $sql4 = "UPDATE current_position SET position=$current_position4 WHERE player=4";
      $res = $dbh->query($sql4);
      $sqlcn4 = "UPDATE current_position SET countNumber=$countNumber4 WHERE player=4";
      $res = $dbh->query($sqlcn4);

      $sqlpn = "UPDATE current_position SET playerNumber=$playerNumber WHERE player=1";
      $res = $dbh->query($sqlpn);
      $sqlnextpn = "UPDATE current_position SET nextPlayer=$nextPlayer WHERE player=1";
      $res = $dbh->query($sqlnextpn);
      $sqltc = "UPDATE current_position SET totalCountNumber=$totalCount WHERE player=1";
      $res = $dbh->query($sqltc);

    } catch(PDOException $e){
        echo '接続失敗'.$e->getMessage();

    };
    //接続を閉じる
    $dbh=null;

    ?>

  </body>
</html>
