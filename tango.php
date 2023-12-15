  <button id="testStartBtn" type="button">テスト開始</button>
  <div class="flexPa" >
    <p class="marginChi" >単語一覧</p>
    <p>検索</p>
  </div>
  <div class="radios" >
    <input class="radio" type="radio" name="a">全部見せる
    <input id="hideEng" class="radio" type="radio" name="a">英語を隠す
    <input id="hideJp" class="radio" type="radio" name="a">日本語を隠す
  </div>

      <?php
        // $table = array(
        //   array("a1", "a2"),
        //   array("b1", "b2"),
        // );

        $table = array(
          array("No" => 1, "Eng" =>"a1", "Ja" => "a2"),
          array("No" => 2, "Eng" =>"s1", "Ja" => "s2")
        )
      ?>
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
                  <button class="badBtn" id="up<?php echo $row["No"]; ?>" type="button">▲</button>
                  <!-- 苦手度下降ボタン --><br>
                  <button class="badBtn" id="down<?php echo $row["No"]; ?>" type="button">▼</button>
                </div>
                <p id="bad<?php echo $row["No"]; ?>"><p>
              </div>
            </td>
            <td><?= $row["Eng"] ?></td>
            <td><?= $row["Ja"] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

  <script>
    var bad = document.getElementsByID("bad"+);
    const up = document.getElementById('up');
    const down = document.getElementById('down');
    bad.textContent = 0;
    up.addEventListener('click', () => {
      bad.textContent++;
    });
    down.addEventListener('click', () => {
      bad.textContent--;
    });

  </script>


