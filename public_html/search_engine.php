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
    <form action ="search_result.php" method ="post">
      <input type = "text" name="Director_name" value = "<?php echo $_POST['Director_name']?>" size = "20" placeholder = "監督名を入力してください">
      <?php
         mb_regex_encoding("UTF-8");
         if (preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u",$_POST['Director_name'])) {
          // 処理を決めかねている箇所
         }else{
         $error = '日本語のみ使用可能です。';
          echo $error;
         }
      ?>
      <p>
      </br><a class="sex">性別</a>
      <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> 男</label>
      <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> 女</label>
      <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> その他</label>
      <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> 不明</label>
      </p>

      <a class="country">出身国</a></br>

      <select name="name">
      <option name = "country" value ="<?php echo $_POST['country']?>">日本</option>
      <option name = "country" value ="<?php echo $_POST['country']?>">アメリカ</option>
      <option name = "country" value ="<?php echo $_POST['country']?>">フランス</option>
      <option name = "country" value ="<?php echo $_POST['country']?>">イギリス</option>
      <option name = "country" value ="<?php echo $_POST['country']?>">イタリア</option>
      </select></br>
      </br><a class="career">活動期間</a>
      </br><input type = "text" name = "career" size= "6" placeholder = "1900" value ="<?php echo $_POST['career']?>">
      ～ <input type = "text" name = "career"  size="6" placeholder = "2020" value ="<?php echo $_POST['career']?>">
      
      </br>
      </br><a class="genre">ジャンル</a></br>
      <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> アクション </label>
      <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> SF </label>
      <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> サスペンス </label>
      </br><label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> コメディ </label>
      <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> ホラー </label>
      <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> アニメ </label>
      <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> 恋愛 </label>
      </p>
      <input type="submit" name="submit" value="検索">
    </form>
  <footer>
    </br><a href = "top_page.php"> 監督検索 </a>
  </footer>
</body>
</html>