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

  <form name="pet_sort">
        <div class="select_box">
            <select name="pets" id="pets" class="pets_filter">
                <option value="all">全て</option>
                <option value="no_pets">なし</option>
                <option value="cat_dog">犬または猫</option>
                <option value="other_pet">その他</option>
            </select>
        </div>
    </form>
    <div class="button_box">
        <button id="sort_btn" class="sort_btn">絞り込み</button>
    </div>
    <table id="pet_table">
        <thead>
            <tr>
                <th class="owner">飼い主</th>
                <th class="pets">ペット</th>
                <th class="pets_name">名前</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="owner">鈴木</td>
                <td class="pets">犬：ボストンテリア<br>
                                 爬虫類：ギリシャリクガメ</td>
                <td class="pets_name">タロウ<br>
                                      亀治郎</td>
            </tr>
            <tr>
                <td class="owner">山本</td>
                <td class="pets">猫：マンチカン</td>
                <td class="pets_name">ハナコ</td>
            </tr>
        <!------------中略------------>
            <tr>
                <td class="owner">高橋</td>
                <td class="pets">爬虫類：レオパ</td>
                <td class="pets_name">やもくん</td>
            </tr>
        </tbody>
    </table>
    <script>
      //絞り込みボタン(#sort_btn)の取得
const SortBtn = document.getElementById('sort_btn');

//sort_btnをクリックしたら
SortBtn.addEventListener('click',function(){

    //検索用のワードを設定
    let Word1 = ['なし'];
    let Word2 = ['犬','猫'];
    //その他で除外するワードを設定
    let Exclusion_word = ['なし','犬','猫'];
    let OterWord = ['爬虫類','鳥','両生類','馬','ブタ','虫','小動物']

    //selectタグを取得(pet_sort=formのname値/pets=selectのname値)
    const PetsSelect = document.pet_sort.pets;
    //selectの値(数値)を取得
    const Num = PetsSelect.selectedIndex;
    //値(数値)から表示されているoptionのvalue値を取得
    const pets_val = PetsSelect.options[Num].value;
    //選択しているoptionに応じて
    //全て → all  なし → no_pets  犬または猫 → cat_dog  その他 → other_pet
    //がそれぞれ取得される。

    //tableが複数あることもあるので、特定のID名のtableを指定
    const PetTable = document.getElementById('pet_table');
    //tableの中のtbodyを指定
    const TableTbody = PetTable.querySelector('tbody');
    //tbodyの中の特定のクラス名を指定
    const PetTd = TableTbody.querySelectorAll('.pets');

    //PetTdの数だけループして処理する
    for(let i = 0; i < PetTd.length; i++){
        //.petsの親要素取得
        const PetTr = PetTd[i].closest('tr');
        //.petsのテキストを取得
        const PetTxt =  PetTd[i].innerText;

        //複数の特定の要素のうち、ひとつでも当てはまったらtrueを返す
        const isIncludes = (arr,target) => arr.some(el => target.includes(el));
        //Word1（なし）が含まれていたらtrueを返す
        let No_Pet = isIncludes(Word1, PetTxt);
        //Word2（犬・猫）が含まれていたらtrueを返す
        let Cat_Dog = isIncludes(Word2, PetTxt);
        //Exclusion_wordが含まれていたらtrueを返す
        let Exclusion = isIncludes(Exclusion_word, PetTxt);
        //OterWordが含まれていたらtrueを返す
        let OtherPet = isIncludes(OterWord, PetTxt);

        //非表示クラス（hidden)を一旦削除
        if(PetTr.classList.contains('hidden') == true){
            PetTr.classList.remove('hidden');
           }

        //絞り込み条件が「その他(other_pet)」の時
        if(pets_val === 'other_pet'){
            //除外：true　その他:false
            if(Exclusion === true && OtherPet === false){
                //その他にあたるものが含まれないので非表示
                //複数種類のキーワードがあるときの表示の設定
                PetTr.classList.add('hidden');

            //除外：true その他：true
            }else if(Exclusion === true && OtherPet === true){
                //除外も含まれてるけどその他も含まれているからから表示
                //複数種類のキーワードがあるときの表示の設定
                PetTr.classList.remove('hidden');

            //除外：false その他：true
             }else if(Exclusion === false && OtherPet === true){
                //その他に該当するから表示
                PetTr.classList.remove('hidden');
            }else{
                //キーワードが何も含まれていないものはその他として表示
                PetTr.classList.remove('hidden');
            }
        }

        //絞り込み条件が「なし(no_pets)」の時
        if(pets_val === 'no_pets'){
            if(No_Pet === true){
                //なしが含まれてたら表示
                PetTr.classList.remove('hidden');
            }else{
                //含まれていなかったら非表示
                PetTr.classList.add('hidden');
            }
        }

        //絞り込み条件が「犬または猫(cat_dog)だったら
        if(pets_val === 'cat_dog'){
            if(Cat_Dog === true){
                //犬または猫が含まれていたら表示
                PetTr.classList.remove('hidden');
            }else{
                //含まれていなかったら非表示
                PetTr.classList.add('hidden');
            }
        }

        //絞り込み条件が「全て(all)だったら
        if(pets_val === 'all'){
            PetTr.classList.remove('hidden');
        }
 
    }//for終わり
});//function終わり
    </script>


  <h2>登録済みの単語帳一覧</h2>
  <div>
    <div>
      <input class="checkbox" type="checkbox">
      <image></image>
      <p>単語帳名1</p>
    </div>
    <div>
      <input class="checkbox" type="checkbox">
      <image></image>
      <p>単語帳名2</p>
    </div>
  </div>
  <div>
    <h2>My単語帳</h2>
    <?php include "tango.php" ?>
  </div>
</body>