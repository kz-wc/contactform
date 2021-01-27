<!DOCTYPE html>
  <html lang="ja">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style2.css">
  <title>問い合わせフォーム</title>
</head>
<body>
  <h1>お問い合わせ内容確認</h1>
  <div class="confirm">
    <p>お問い合わせ内容はこちらでよろしいでしょうか
      <br>よろしければ「登録する」ボタンを押してください。</p>
      <p>名前
        <br>
        <?php echo $_POST['name']; ?>
      </p>

      <p>メールアドレス
        <br>
        <?php echo $_POST['mail']; ?>
      </p>

      <p>年齢
        <br>
        <?php echo $_POST['age']."歳"; ?>
      </p>

      <p>コメント
        <br>
        <?php echo $_POST['comments']; ?>
      </p>
    <form action="index.html">
      <input type="submit" class="button button1" value="修正する">
    </form>
    <form method="POST" action="insert.php">
      <input type="submit" class="button button2" value="登録する">
      <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
    </form>
</div>

</body>
</html>