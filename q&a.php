<!DOCTYPE html>

<head>
  <title>問題＆解答</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div >
    <div class="backColorTest">
      <input class="checkbox" type="checkbox">
      <p>問題（Eng）</p>
      <p id="option1" class="hidden">解答（日本語）</p>
    </div>
    <div class="flex">
      <table id="option2" class="hidden" >
        <tr>
          <th>×</th>
          <th>△</th>
          <th>〇</th>
        </tr>
      </table>
    </div>
  </div>
</body>

<script>
  const body = document.body;
  const option1 = document.getElementById('option1');
  const option2 = document.getElementById('option2');
  body.addEventListener('click', () => {
    option1.classList.toggle("hidden")
    option2.classList.toggle("hidden")
  });
  window.onkeydown = function(e){
    // 入力キー情報を取得
    var key = e.key;
    if(key === "Enter"){
      option1.classList.toggle("hidden")
      option2.classList.toggle("hidden")
    }
  }
</script>



