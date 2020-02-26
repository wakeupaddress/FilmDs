<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Search engine</title>
  <meta name = "description" content = "監督を検索するページです">
  <style>

  footer{
  text-align:left;
  }
  .search {
   text-align:center;
  }

  </style>
</head>
<body>
    <h1>監督検索</h1>
    <a class ="name"> 監督名 </a>
    <form method="post",>
    <p>監督名を入力してください：<input type="text" name="name"></p>
    </form>
    <a class="sex">性別</a>
    <p>
    <input type="radio" name="q1" value="男">
    <input type="radio" name="q1" value="女"> 
    </p>
    <a class="country">出身国</a>
    <select name="name">
    <option value="サンプル1">サンプル1</option>
    <option value="サンプル2">サンプル2</option>
    <option value="サンプル3">サンプル3</option>
    </select>
    <a class="career">活動期間</a>
    
    <a class="genre">ジャンル</a>
    <p>
    <input type="checkbox" name="genre" value="アクション"> 
    <input type="checkbox" name="genre" value="SF"> 
    <input type="checkbox" name="genre" value="サスペンス"> 
    <input type="checkbox" name="genre" value="コメディ"> 
    <input type="checkbox" name="genre" value="ホラー"> 
    <input type="checkbox" name="genre" value="アニメ"> 
    <input type="checkbox" name="genre" value="恋愛"> 
    </p>
    <a class="search" a href="">監督検索</a>
  <footer>
    <a href = ""> 監督検索 </a>
  </footer>
</body>
</html>