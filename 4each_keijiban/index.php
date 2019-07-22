<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>  
    
    <script>
    $(document).ready(function(){
      $('.abc').bxSlider({
         auto: true
        ,mode: 'fade'
        ,speed: 1000
        ,slideWidth: 400
      });
    });
  </script>
<body>
<header>
	<img src="4eachblog_logo.jpg">
	<div class="header_bottom">
		<ul class="menu">
			<li>トップ</li>
			<li>プロフィール</li>
			<li>4earchについて</li>
			<li>登録フォーム</li>
			<li>問い合わせ</li>
			<li>その他</li>
		</ul>
	</div>
</header>
<main>
    <div class="left">
        <h1>プログラミングに役立つ書籍</h1>  
        <form method="post" action="insert.php">
        <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text"class="text" size="35" name="handlename">
            </div>

            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div>
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>

            <div>
                <input type="submit" class="submit" value="送信する">
            </div>
        </form>
   <?php
//        echo"<div class='kiji'>";
//            echo"<h3>タイトル</h3>";
//            echo"<div class='contents'>";
//               echo" 記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
//                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
//                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
//                    echo"<div class='handlename'>posted by 通りすがり</div>";
//            echo"</div>";
//        echo"</div>";
 
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
        $stmt = $pdo->query("select * from 4each_keijiban");
    
        while($row = $stmt->fetch()){
            echo"<div class='kiji'>";
            echo"<h3>".$row['title']."</h3>";
            echo"<div class='contents'>";
            echo $row['comments'];
            echo"<div class='handlename'>posted by".$row['handlename']."</div>";
            echo"</div>";
            echo"</div>";
        }           
//        mb_internal_encoding("utf8");
//        $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
//        $stmt = $pdo->query("select * from 4each_keijiban");
//
//        while ($row = $stmt->fetch()){
//            echo $row['handlename'];
//            echo $row['title'];
//            echo $row['comments'];
//        }
    ?> 
    </div>
 
    <div class="right">
        <h2>人気の記事</h2>
        PHPオススメ本<br>
        PHP MyAdminの使い方<br>
        いま人気のエディタTop5<br>
        HTMLの基礎<br>
        <h2>オススメリンク</h2>
        インターノウス株式会社<br>
        XAMPPのダウンロード<br>
        Eclipseのダウンロード<br>
        Braketsのダウンロード<br>
        <h2>カテゴリ</h2>
        HTML<br>
        PHP<br>
        MySQL<br>
        JavaScrip<br>
    </div>

</main> 
<footer>copyright ©︎ internous | 4earch blog is the one which provides A to Z about programming.</footer> 
</body>    
</html>