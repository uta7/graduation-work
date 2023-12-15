<?php include "data.php" ?>
  <button class="testStartBtn" type="button" onclick="location.href='q&a.php'">英⇒日：テスト開始</button>
  <button class="testStartBtn" type="button" onclick="location.href='test.php'">日⇒英：テスト開始</button>
  <div class="flexPa" >
    <p class="marginChi" >単語一覧</p>
    <p>検索</p>
  </div>
  <div class="radios" >
    <input id="radio1" class="radio" type="radio" name="word" checked><label for="radio1">全部見せる</label>
    <input id="radio2" class="radio" type="radio" name="word" onclick="hiddenWords(<?= $row['No'] ?>, 'Eng');" ><label for="radio2">英語を隠す</label>
    <input id="radio3" class="radio" type="radio" name="word" onclick="hiddenWords(<?= $row['No'] ?>, 'Jp');" ><label for="radio3">日本語を隠す</label>
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
                  <button class="badBtn" id="up" type="button" onclick="updateBad(<?= $row['No'] ?>, 'up');">▲</button>
                  <!-- 苦手度下降ボタン --><br>
                  <button class="badBtn" id="down" type="button" onclick="updateBad(<?= $row['No'] ?>, 'down');">▼</button>
                </div>
                <p id="bad<?php echo $row["No"]; ?>">0<p>
              </div>
            </td>
            <td id="EngWord<?php echo $row["No"];?>"><?= $row["Eng"] ?></td>
            <td id="JpWord<?php echo $row["No"];?>"><?= $row["Ja"] ?></td>
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

  function hiddenWords(rowID, type) {
    var EngWordId = "EngWord" + rowId;
    var JpWordId = "JpWord" + rowId;
    var EngWords = document.getElementById(EngWordId);
    var JpWords = document.getElementById(JpWordId);
    if (type === "Eng") {
      EngWords.classList.toggle("hidden");
    } else if (type === "Jp") {
      JpWords.classList.toggle("hidden");
    }
  }


  </script>
