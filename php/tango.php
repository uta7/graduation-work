  <button type="button">テスト開始</button>
  <div>
    <p>単語一覧</p>
    <p>検索</p>
  </div>
  <div>
    <input class="radio" type="radio">全部見せる
    <input class="radio" type="radio">英語を隠す
    <input class="radio" type="radio">日本語を隠す
  </div>
  <table>
    <tr>
      <th>苦手度</th>
      <th>英語</th>
      <th>日本語</th>
    </tr>
    <tr>
      <td>
        <div class="flex">
          <!-- 苦手度上昇ボタン -->
          <button id="up" type="button">▲</button>
          <!-- 苦手度下降ボタン -->
          <button id="down" type="button">▼</button>
        </div>
        <p id="bad"><p>
      </td>
      <td>sample</td>
      <td>サンプル</td>
    </tr>
  </table>

  <script>
    var bad = document.getElementById("bad");
    const up = document.getElementById('up');
    const down = document.getElementById('down');
    bad = 0;
    up.addEventListener('click', () => {
      bad.textContent++;
    });
    down.addEventListener('click', () => {
      bad.textContent--;
    });
  </script>