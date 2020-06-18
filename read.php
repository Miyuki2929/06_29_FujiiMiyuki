<?php
// フォームデータが空の場合は処理終了
if (empty($_POST)) {
  echo "処理終了";
exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケートフォーム</title>
</head>
<body>
  <h1>アンケートフォーム(2.回答確認画面）</h1>
  <p>回答を確認してください</p>
  <?php
  // 入力値の取得
  $uname = htmlspecialchars($_POST["uname"],ENT_QUOTES,"UTF-8");
  if(empty($uname)){
    echo "お名前を入れてください";
    exit;
  }
  
  $email = htmlspecialchars($_POST["email"],ENT_QUOTES,"UTF-8");
  if(empty($email)){
    echo "メールアドレスを入れてください";
    exit;
  }

  $gender = htmlspecialchars($_POST["gender"],ENT_QUOTES,"UTF-8");
  if(empty($gender)){
    echo "性別を入れてください";
    exit;
  }

  $job = htmlspecialchars($_POST["job"],ENT_QUOTES,"UTF-8");
  if(empty($job)){
    echo "職業を選択してください";
    exit;
  }

  if (empty($_POST["tec"])){
    $tec = "なし";
  }else{
    $tec = implode(" ",$_POST["tec"]);
  }

  $tec = htmlspecialchars($tec,ENT_QUOTES, "UTF-8");

  if($_POST["dm"] == "on"){
    $dm = "送付希望";
  } else{
      $dm = "不要";
    }
  

  $message = htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8");
  if(empty($massage)){
    echo "今後のご希望を入力してください";
    exit;
  }
?>

<!-- アンケート回答確認表示 -->
<form method="POST" action="submit.php">
<table border="1">
<tr>
    <td>お名前</td>
    <td><?php echo $uname ?></td>
</tr>

<tr>
    <td>メールアドレス</td>
    <td><?php echo $email ?></td>
</tr>

<tr>
    <td>性別</td>
    <td><?php echo $gender ?></td>
</tr>

<tr>
    <td>経験のある言語</td>
    <td><?php echo $tec ?></td>
</tr>

<tr>
    <td>イベントのお知らせ</td>
    <td><?php echo $dm ?></td>
</tr>

<tr>
    <td>職業</td>
    <td><?php echo $job ?></td>
</tr>

<tr>
    <td>今後の希望</td>
    <td><?php echo  nl2br($message) ?></td>
</tr>

<tr>
  <td align ="right" colspan="2">
<input type="submit" value="回答を送信する" name="subl">
  </td>
</tr>
</table>

<!-- hiddenフィールド -->
<input type="hidden" =name="uname" value="<?php echo $uname; ?>">
<input type="hidden" =name="email" value="<?php echo $email; ?>">
<input type="hidden" =name="gender" value="<?php echo $gender; ?>">
<input type="hidden" =name="job" value="<?php echo $job; ?>">
<input type="hidden" =name="tec" value="<?php echo $tec; ?>">
<input type="hidden" =name="dm" value="<?php echo $dm; ?>">
<input type="hidden" =name="message" value="<?php echo $message; ?>">
</form>
</body>
</html>
