<!DOCTYPE html>

<head>
  <title>テスト</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include "header.php" ?>
<?php include "data.php" ?>
  <div class="headerMargin" class="backColorTest" id="BackCo">
    <div class="flexPa">
      <input class="checkbox" type="checkbox">
      <div class="fontsizeSmall">この単語を登録する</div>
    </div> 
    <p id="questionTest"><?php echo $table[0]["Ja"]; ?></p>
    <!-- タイプした文字 -->
    <p id="out"></p>
  </div>
</body>

<script>
  let table = <?php echo $encodedTable ?>;
  let index = 0;
  var answer = document.getElementById('out');
  var background =  document.getElementById('BackCo');
  var keyString = "";

  function nextTest(){
    const question = document.getElementById('questionTest');
    if (index < table.length) {
      index++;
      question.textContent = table[index]["Ja"];
    }
    else if (index = table.length) {
      index = 0;
      question.textContent = table[index]["Ja"];
    }
  };

  window.onkeydown = function(e){
    // 入力キー情報を取得
    var key = e.key;
    if(key === "Backspace" || key === "Delete" || key === "ArrowLeft"){
      key = "";
      keyString = keyString.slice( 0, -1 ) ;
    }
    else if(key === "Space"){
      key = " ";
    }
    else if(key === "Enter" && keyString === table[index]["Eng"]){
      key = "";
      keyString = "";
      nextTest();
    }
    else if(key === "Enter" && keyString !== table[index]["Eng"]){
      key = "";
      keyString = "";
    }

    // 今までの入力キー情報を連結
    keyString += key;
    // 画面に表示
    answer.innerHTML = keyString;
  }
</script>


