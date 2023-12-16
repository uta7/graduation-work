<?php include "data.php" ?>
  <a class="testStartBtn" href='q&a.php'>英⇒日：テスト開始</a>
  <a class="testStartBtn"  href='test.php'>日⇒英：テスト開始</a>
  <div>
    <p >単語一覧</p>
    <input id="searchBox" type="text" placeholder="検索" />
  </div>
  <div class="radios" >
    <input id="radio1" class="radio" type="radio" name="word" onclick="radioHidden()" checked><label for="radio1">全部見せる</label>
    <input id="radio2" class="radio" type="radio" name="word" onclick="radioHidden()" ><label for="radio2">英語を隠す</label>
    <input id="radio3" class="radio" type="radio" name="word" onclick="radioHidden()" ><label for="radio3">日本語を隠す</label>
  </div>
  <table>
    <thead>
      <tr><th>苦手度</th><th>英語</th><th>日本語</th></tr>
    <thead>
    <tbody>
      <?php foreach($table as $row): ?>
      <tr>
        <td class="td" >
          <div class="flex">
            <div class="left">
              <!-- 苦手度上昇ボタン -->
              <button class="badBtn" class="up" type="button" onclick="updateBad(<?= $row['No'] ?>, 'up');">▲</button>
              <!-- 苦手度下降ボタン --><br>
              <button class="badBtn" class="down" type="button" onclick="updateBad(<?= $row['No'] ?>, 'down');">▼</button>
            </div>
            <p id="bad<?php echo $row["No"]; ?>">0<p>
          </div>
        </td>
        <td>
          <div class="EngWords" id="EngWord<?php echo $row['No']; ?>" onclick="hiddenToggle(<?= $row['No'] ?>, 'EN');"><?= $row["Eng"] ?></div>
        </td>
        <td>
          <div class="JpWords" id="JpWord<?php echo $row['No']; ?>" onclick="hiddenToggle(<?= $row['No'] ?>, 'JP');"><?= $row["Ja"] ?></div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <script>
  function updateBad(rowId, type) {
    var elementId = "bad" + rowId;
    var bad = document.getElementById(elementId);
    if (type === "up") {
      bad.textContent++;
    } else if (type === "down") {
      bad.textContent--;
    }
  }

  function hiddenToggle(rowID, type){
    var ENID ="EngWord" + rowID;
    var JPID ="JpWord" + rowID;
    var EngWords = document.getElementById("ENID");
    var JpWords = document.getElementById("JPID");
    if (type === "EN" && EngWords.style.visibility === "hidden") {
      EngWords.style.visibility = "visible"
    } else if (type === "EN" && EngWords.style.visibility === "visible") {
      EngWords.style.visibility = "hidden"
    } else if (type === "JP" && EngWords.style.visibility === "hidden") {
      JpWords.style.visibility = "visible"
    } else if (type === "JP" && EngWords.style.visibility === "visible") {
      JpWords.style.visibility = "hidden"
    }
  }

  function radioHidden() {
    var radio = document.getElementsByName("word");
    var EN = document.getElementsByClassName("EngWords");
    var JP = document.getElementsByClassName("JpWords");
    let table = <?php echo $encodedTable ?>;

    if(radio.item(0).checked){
      for(let i = 0; i < table.length; i++){
        EN.item(i).style.visibility = "visible"
        JP.item(i).style.visibility = "visible"
      }
    } else if(radio.item(1).checked){
      for(let j = 0; j < table.length; j++){
        EN.item(j).style.visibility = "hidden"
        JP.item(j).style.visibility = "visible"
      }
    } else if(radio.item(2).checked){
      for(let k = 0; k < table.length; k++){
        EN.item(k).style.visibility = "visible"
        JP.item(k).style.visibility = "hidden"
      }
    }
  }
  </script>
