<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Search engine</title>
  <meta name = "description" content = "監督を検索するページです">
  <link rel ="stylesheet" href="css/search_engine-styles.css">
</head>
<body>

    <h1>監督検索</h1>
    <a class ="name"> 監督名 </a>
    <!-- 変更前のコード
    <form method="post",>
    <p>監督名を入力してください：<input type="text" name="name"></p> -->
    </br><input type = "text" size = "20" placeholder = "監督名を入力してください">
    </form>
    <p>
    </br><a class="sex">性別</a>

    <p>
    <label><input type="checkbox"> 男</label>
    <label><input type="checkbox"> 女</label>
    <label><input type="checkbox"> その他</label>
    </p>

    <a class="country">出身国</a></br>

    <select name="name">
    <option value="サンプル1">サンプル1</option>
    <option value="サンプル2">サンプル2</option>
    <option value="サンプル3">サンプル3</option>
    </select>
    <p>
    </br><a class="career">活動期間</a>
    </br><input type = "text" size= "6" placeholder = "1900"> ～ <input type = "text" size="6" placeholder = "2020">
    <p>
    </br><a class="genre">ジャンル</a>
    <label><input type="checkbox" name="genre"> アクション </label>
    <label><input type="checkbox" name="genre"> SF </label>
    <label><input type="checkbox" name="genre"> サスペンス </label>
    </br><label><input type="checkbox" name="genre"> コメディ </label>
    <label><input type="checkbox" name="genre"> ホラー </label>
    <label><input type="checkbox" name="genre"> アニメ </label>
    <label><input type="checkbox" name="genre"> 恋愛 </label>
    </p>
    <a class="search" a href="">検索</a>
  <footer>
    <a href = ""> 監督検索 </a>
  </footer>
</body>
</html>