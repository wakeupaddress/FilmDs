<html>
    <head>
      <title>management_register</title>
      <h1>
      <a class="tab_btn" href="#item1">監督管理</a>
      <a class="tab_btn" href="#item2">作品管理</a>
      <a class="tab_btn" href="#item3">ユーザ管理</a>
      　　　ログイン中:
      </h1>

      <div class="tab_item is-active-item" id="item1">
        管理トップページ
        </br>監督名</br>
        <input type = "text" name="Director_name" value = "<?php echo $_POST['Director_name']?>" size = "20" placeholder = "監督名を入力してください">
        </br>性別</br>
        <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> 男</label>
        <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> 女</label>
        <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> その他</label>
        <label><input type="checkbox" name ="sex" value ="<?php echo $_POST['sex']?>"> 不明</label>
        </br>活動期間</br>
        <input type = "text" name = "career" size= "6" placeholder = "1900" value ="<?php echo $_POST['career']?>">
        ～ <input type = "text" name = "career"  size="6" placeholder = "2020" value ="<?php echo $_POST['career']?>">
        </br>概要</br>
        <!-- <textarea name="summary" value = "<?php echo $_POST['Director_name']?>" style="width:30em; height: 6em; font-size:50%" placeholder = "概要を入力してください"> -->
        <form name ="summary">
        <textarea name="summary" rows="3" cols="50" wrap="">こちらに概要を入力してください
        </textarea>
        </form>
        ジャンル</br>
        <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> アクション </label>
        <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> SF </label>
        <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> サスペンス </label>
        </br><label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> コメディ </label>
        <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> ホラー </label>
        <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> アニメ </label>
        <label><input type="checkbox" name="genre" value ="<?php echo $_POST['genre']?>"> 恋愛 </label>
        </br></br><input type="submit" name="submit" value="登録(更新)"></br>
        </div>
        <div class="tab_item" id="item2">
          作品一覧
          </br><input type="submit" name="submit" value="新規登録">
          <table border="1" width="600">
          <tr>
            <th>作品名</th>　<th>監督名</th>　<th>公開年</th>　<th>最終更新日</th>　<th>操作</th>
          </tr>
          <tr>
            <th>君の名は</th>　<th>新海誠</th>　<th>2019</th>　<th>yyyy/mm/dd</th>　<th>削除　編集</th>
          </tr>
          <tr>
            <th>海街diary</th>　<th>是枝裕和</th>　<th>2018</th>　<th>yyyy/mm/dd</th>　<th>削除　編集</th>
          </tr>
          <tr>
            <th>　</th>　<th>　</th>　<th>　</th>　<th>　</th>　<th>　</th>
          </tr>
          <tr>
            <th>　</th>　<th>　</th>　<th>　</th>　<th>　</th>　<th>　</th>
          </tr>
      </div>
      <div class="tab_item" id="item3">ユーザー管理
        <!-- 管理画面 作品登録(更新) のコードです
          作品登録</br>
        　　作品名<br>
        <input type = "text" name="Work_name" value = "<?php echo $_POST['Work_name']?>" size = "20" placeholder = "作品名を入力してください"></br>
        　　監督名</br>
        <input type = "text" name="Director_name" value = "<?php echo $_POST['Director_name']?>" size = "20" placeholder = "監督名を入力してください"></br>
        　　公開年月</br>
        <input type = "text" name = "career" size= "6" placeholder = "2020" value ="<?php echo $_POST['career']?>">
        年<input type = "text" name = "career"  size="6" placeholder = "1" value ="<?php echo $_POST['career']?>">月 </br>
        <input type="submit" name="submit" value="登録(更新)">-->
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

      <script>
      $(function() {
        $('.tab_btn').on('click', function() {
          $('.tab_item').removeClass("is-active-item");
          $($(this).attr("href")).addClass("is-active-item");

          $('.tab_btn').removeClass('is-active-btn');
          $(this).addClass('is-active-btn');
        });
        });
      </script>

      <meta name = "description" content = "管理画面へのログインページです">

      <link rel ="stylesheet" href="css/management_director_register-styles.css">

    </head>
    <body>
    <h2><div style="position:absolute; top:30px; left:1000px;">ログアウト</h2></div>
    <footer>
      <a class = 'tab_btn' href = "#item1">監督管理</a>
      <a class = 'tab_btn' href = "#item2">作品管理</a>
      <a class = 'tab_btn' href = "#item3">ユーザ管理</a>
    </footer>
    </body>
</html>