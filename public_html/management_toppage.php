<html>
    <head>
      <title>management_toppage</title>
      <h1>
      <a class="tab_btn" href="#item1">監督管理</a>
      <a class="tab_btn" href="#item2">作品管理</a>
      <a class="tab_btn" href="#item3">ユーザ管理</a>
      　　　ログイン中:
      </h1>

      <div class="tab_item is-active-item" id="item1">管理トップページ</div>
      <div class="tab_item" id="item2">監督管理</div>
      <div class="tab_item" id="item3">ユーザー管理</div>
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

      <link rel ="stylesheet" href="css/management_toppage-styles.css">

    </head>
    <body>
    <h2><div style="position:absolute; top:30px; left:1000px;">ログアウト</h2></div>
    <footer>
      <a class = 'tab_btn' href = "#item1"> 管理トップページ</a>
      <a class = 'tab_btn' href = "#item2">監督管理</a>
      <a class = 'tab_btn' href = "#item3">ユーザ管理</a>
    </footer>
    </body>
</html>