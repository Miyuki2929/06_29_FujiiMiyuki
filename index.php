<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケートフォーム</title>
</head>
<body>
  <h1>アンケートフォーム(1. 回答画面)</h1>
  <p>アンケートに回答して「確認する」ボタンをクリックしてください</p>
   <form method="POST" action="check.php">
   <table border="1">

     <tr>
       <td>お名前</td>
       <td><input type="text" name="uname" size="50"></td>
     </tr>

     <tr>
       <td>メールアドレス</td>
       <td><input type="text" name="email" size="50"></td>
     </tr>

     <tr>
        <td>性別</td>
        <td>
          <!-- 2択のラジオボタン -->
          <input type="radio" name="gender" value="男">男性
          <input type="radio" name="gender" value="女">女性
        </td>
     </tr>

     <tr>
       <td>職業</td>
     <td>
     <!-- 選択メニュー  -->
      <select name="job">
        <option value="">▼選択</option>
        <option>学生</option>
        <option>会社員</option>
        <option>公務員</option>
        <option>フリーランス</option>
        <option>パート・アルバイト</option>
        <option>派遣</option>
        <option>その他</option>
      </select>
     </td>
     </tr>

     <tr>
        <td>経験のある言語(複数選択可)</td>
        <td>
        <!--チェックボックス  -->
        <input type="checkbox" name="tec[]" value="PHP">PHP
        <input type="checkbox" name="tec[]" value="JS">JavaScript
        <input type="checkbox" name="tec[]" value="HTML">HTML/CSS
        <input type="checkbox" name="tec[]" value="other">その他
        </td>
     </tr>

   <tr>
    <td>イベントのお知らせ</td>
    <td>
      <input type="checkbox" name="dm" checked>送付を希望する
    </td>
    </tr>
    <tr>
      <td>今後の希望</td>
      <td>
        <textarea name="message" id="" cols="50" rows="10"></textarea>
      </td>
    </tr>

    <tr>
    <td align="right" colspan="2">
    <input type="submit" value="確認する" name="sub1">
    </td>
    </tr>
   </table>
  </form>
  
</body>
</html>