  <button type="button">テスト開始</button>
  <div>
    <p>単語一覧</p>
    <p>検索</p>
  </div>
  <div class="radios" >
    <input class="radio" type="radio" name="a">全部見せる
    <input id="hideEng" class="radio" type="radio" name="a">英語を隠す
    <input id="hideJp" class="radio" type="radio" name="a">日本語を隠す
  </div>

  <!-- <?php foreach ($wordList as $word) { ?>
  <tr>
    <td>(苦手度ボタン)</td>
    <td clas><?= $word['英訳'] ?>
   <td class><?= $word['和訳'] ?>
  </tr>
  <?php } ?> -->


  <table>
    <tr>
      <th>苦手度</th>
      <th>英語</th>
      <th>日本語</th>
    </tr>
    <tr>
      <td class="td" >
        <div class="flex">
        <div class="left">
          <!-- 苦手度上昇ボタン -->
          <button class="btn" id="up" type="button">▲</button>
          <!-- 苦手度下降ボタン --><br>
          <button class="btn" id="down" type="button">▼</button>
        </div>
        <div class="right">
        <p id="bad"><p>
        </div>
        </div>
      </td>
      <td class="td" id="Eng">sample</td>
      <td class="td" id="Jp">サンプル</td>
    </tr>
  </table>

  <script>
    var bad = document.getElementById("bad");
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