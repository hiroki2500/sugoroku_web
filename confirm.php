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

    <?php

    $dsn = 'mysql:host=localhost;dbname=sugoroku;charset=utf8';
    $user = 'sugoroku_user';
    $pass = 'maru2020';
    $p1 = $_POST["player1"];

    try{
      //DBへ接続
      $dbh = new PDO($dsn,$user,$pass,[
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]);

      //SQL作成
      $sql = 'UPDATE current_position SET position=$p1 WHERE player=1';
      //SQL実行
      $res = $dbh->query($sql);

    } catch(PDOException $e){
        echo '接続失敗'.$e->getMessage();

    };
    //接続を閉じる
    $dbh=null;

    ?>
  </body>
</html>
