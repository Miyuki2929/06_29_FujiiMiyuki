<?php
// フォームデータが空の場合は処理終了
if(empty($_POST)){
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
<h1>アンケートフォーム(3．回答完了画面)</h1>
<? php
// 入力値の取得
// htmlspecialchars関数=特殊文字を変換する安全のための変数
$uname = htmlspecialchars($_POST["uname"], ENT_QUOTES, "UTF-8");
$email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
$gender = htmlspecialchars($_POST["gender"], ENT_QUOTES, "UTF-8");
$job = htmlspecialchars($_POST["job"], ENT_QUOTES, "UTF-8");
$tec = htmlspecialchars($_POST["tec"], ENT_QUOTES, "UTF-8");
$dm = htmlspecialchars($_POST["dm"], ENT_QUOTES, "UTF-8");
$massage = htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8");

// 回答を書き込む準備
$line = array($uname, $email, $gender, $tec, $dm, $message );

// ファイルへの書き込み
// fputcsv関数＝cvsファイル作成
$file_name = "answer.csv";
$fp = fopen($file_name, "a");
$retune = fputcsv($fp, $line);
fclose($fp);

if ($return){
  $result_message = "ご回答ありがとうございました";
} else {
  $result_message = "エラーが発生しました";
}
?>

<p><?php echo $result_message; ?></p>  
</body>
</html>