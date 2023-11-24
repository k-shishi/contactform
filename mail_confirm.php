<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='style2.css'>
  <title>mail_confirm</title>
</head>
<body>
  <main>
    <h1 class="form_title">お問い合わせ内容確認</h1>
    <div class="main_container">
      <p>
        お問い合わせ内容はこちらで宜しいでしょうか？<br>
        よろしければ「送信する」ボタンを押してください。
      </p>
      <div class="form_confirm">
        <p>
          名前<br>
          <?php echo $_POST["name"]; ?>
        </p>
      </div>
      <div class="form_confirm">
        <p>
          メールアドレス<br>
          <?php echo $_POST["mail"]; ?>
        </p>
      </div>
      <div class="form_confirm">
        <p>
          年齢<br>
          <?php echo $_POST["age"]; ?>
        </p>
      </div>
      <div class="form_confirm">
        <p>
          コメント<br>
          <?php echo $_POST["comments"]; ?>
        </p>
      </div>
      <div class="form_submit">
        <form action='/contactform' method="POST">
          <input type="submit" value="戻って修正する" class="form_back">
        </form>
        <form action='insert.php' method="POST">
          <input type='submit' value="登録する" class="form_register">
          <?php 
            foreach($_POST as $key => $value) {
              echo "<input type='hidden' name='{$key}' value='{$value}'>";
            }
          ?>
        </form>
    </div>    
  </main>
</body>
</html>