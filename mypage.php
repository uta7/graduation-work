<!DOCTYPE html>

<head>
  <title>マイページ</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
</head>
 
<body>
  <?php include "header.php" ?>
  <h2 class="headerMargin">登録済みの単語帳一覧</h2>
  <div>
    <div class="tangochou">
      <input class="checkbox" type="checkbox">
      <image></image>
      <a href="tangochou.php">金のフレーズ</a>
    </div>
    <!-- <div class="tangochou">
      <input class="checkbox" type="checkbox">
      <image></image>
      <a href="tangochou.php">単語帳名2</a>
    </div> -->
  </div>
  <div>
    <h2>My単語帳</h2>
    <?php include "tango.php" ?>
  </div>
</body>
