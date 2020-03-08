<html>
    <head>
      <title>management_page</title>
      <h1> FilmDs管理画面ログイン</h1>
      <meta name = "description" content = "管理画面へのログインページです">
      <link rel ="stylesheet" href="css/management_page-styles.css">
    </head>
    <body>
    <h2>ID:<input type = "text" name="login_name" value = "<?php echo $_POST['login_name']?>" size = "20">
    </br>
    PW:<input type = "text" name="password" value = "<?php echo $_POST['password']?>" size = "20"></h2>
    <h3><a href = "management_toppage.php"> ログイン </a></h2>
      
    </body>
</html>