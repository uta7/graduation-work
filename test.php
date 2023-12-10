<!DOCTYPE html>

<head>
  <title>テスト</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">

  <script>
    var keyString = "";
    window.onkeydown = function(e){
      // 入力キー情報を取得
      var key = e.key;
      if(key === "Backspace"){
        key = "";
        keyString = keyString.slice( 0, -1 ) ;
      }
      else if(key === "Delete"){
        key = "";
        keyString = keyString.slice( 0, -1 ) ;
      }
      else if(key === "Enter"){
        key = "";
        keyString = "";
      }
      // 今までの入力キー情報を連結
      keyString += key;
      // 画面に表示
      document.getElementById("out").innerHTML = keyString;
    }
  </script>
    
</head>


<body>
  <div class="test"></div>
    <input class="checkbox" type="checkbox">
    <p id="question">問題（日本語）</p>
    <!-- タイプした文字 -->
    <p id="out"></p>
  </div>
</body>

