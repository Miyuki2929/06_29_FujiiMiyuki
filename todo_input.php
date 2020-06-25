<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ニュース</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>ニュース ネタ</legend>
      <a href="todo_read.php">一覧画面</a>
      <table border="1">


      <tr>
       <td>URL</td>
       <td><input type="text" name="url" size="50"></td>
     </tr>

      <!-- <div>
        URL: <input type="text" name="url">
      </div> -->
      <!-- <tr>
      <td>コメント</td>
      <td>
        <textarea name="message"  cols="50" rows="10"></textarea>
      </td>
    </tr> -->
      <!-- <div>
        コメント: <input type="text" name="comment">
      </div>
      <textarea rows="5" colos="100" name="comment"></textarea> -->
  
      <tr>
      <td>日付：<input type="date" name="date"></td>
      </tr>
 

<!-- 
      <div>
        日付: <input type="date" name="date">
      </div>
      <div> -->
        <button>保存</button>
      </div>
    </fieldset>
  </form>

</body>

</html>