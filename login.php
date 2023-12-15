<!DOCTYPE html>

<head>
  <title>ログイン</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="form.css">
</head>
 
<body>
  <div id="login-box" >
    <div class="left-box">
      <h1>ログイン</h1>
      <label class="label">メールアドレス</label>
      <input type="text" name="email" placeholder="***@***" />
      <br>
      <label class="label">パスワード</label>
      <input type="password" name="password" placeholder="password" />
      <ul>
         <li>
            未登録の方は<a href="registration.php">こちら</a>
         </li>
         <!-- <li>
            パスワードを忘れた方は<a href="">こちら</a>
        </li> -->
      </ul>
      <input type="submit" name="login-button" value="ログイン" />
    </div> 
  </div>

</body>

