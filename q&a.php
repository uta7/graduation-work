<!DOCTYPE html>

<head>
  <title>問題＆解答</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include "header.php" ?>
  <?php include "data.php" ?>
  <div class="headerMargin">
    <div class="backColorTest">
      <div class="flexPa">
        <input class="checkbox" type="checkbox">
        <div class="fontsizeSmall">この単語を登録する</div>
      </div> 
      <p id="question"  class="question">
        <?php echo $table[0]["Eng"]; ?>
      </p>
      <p id="option1" class="hidden">
        <?php echo $table[0]["Ja"];?>
      </p>
    </div>
    <div>
      <div id="option2" class="hidden" >
        <div id="wrong" class="testBtn" onclick="next()">×</div>
        <div id="normal" class="testBtn" onclick="next()">△</div>
        <div id="right" class="testBtn" onclick="next()">〇</div>
      </div>
    </div>
  </div>
</body>

<script>
  const body = document.body;
  const option1 = document.getElementById('option1');
  const option2 = document.getElementById('option2');
  var wrong = document.getElementById('wrong');
  var normal = document.getElementById('normal');
  var right = document.getElementById('right');

  body.addEventListener('click', () => {
    option1.classList.remove("hidden")
    option2.classList.remove("hidden")
  });

  window.onkeydown = function(e){
    // 入力キー情報を取得
    var key = e.key;
    if(key === "Enter"){
      option1.classList.remove("hidden")
      option2.classList.remove("hidden")
    }
    else if(key === "Delete"){
      option1.classList.add("hidden")
      option2.classList.add("hidden")
    }
  };

  let table = <?php echo $encodedTable ?>;
  let index = 0;
  function next(){
    const question = document.getElementById('question');
    const answer = document.getElementById('option1');
    // option1.classList.add("hidden")
    // option2.classList.add("hidden")
    if (index < table.length) {
      index++;
      question.textContent = table[index]["Eng"];
      answer.textContent = table[index]["Ja"];
    }
    else if (index = table.length) {
      index = 0;
      question.textContent = table[index]["Eng"];
      answer.textContent = table[index]["Ja"];
    }
  };

</script>