<!DOCTYPE html>

<head>
  <title>登録</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="form.css">
</head>

<body>
  <!-- <form> 
    <label>メールアドレス</label> 
    <input type="text" placeholder="***@***">
    <br>
    <label>パスワード</label> 
    <input type="text" placeholder="password">
    <p>8文字以上で入力してください。</p>
  </form>
  <button type="button">新規登録</button> -->

  <div id="login-box" >
    <div class="left-box">
      <h1>新規登録</h1>
      <label class="label">メールアドレス</label>
      <input type="text" name="email" placeholder="***@***" />
      <br>
      <label class="label">パスワード</label>
      <input type="password" name="password" placeholder="password" />
      <ul>
        <li>
          ログインは<a href="login.php">こちら</a>から。
        </li>
      </ul>
      <input type="submit" name="login-button" value="新規登録" />
    </div> 
  </div>
</body>