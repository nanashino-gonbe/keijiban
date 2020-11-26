<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
    <?php

    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=4each_practice;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>
        <header>
            <img src="4eachblog_logo.jpg">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="main-container">
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <form method="post" action="insert.php">
                        <h2>入力フォーム</h2>
                        <ul>
                            <li>
                                <p>
                                    <label for="handlename">ハンドルネーム</label>
                                </p>
                                <input id="handlename" type="text" name="handlename" size="35">
                            </li>
                            <li>
                                <p>
                                    <label for="title">タイトル</label>
                                </p>
                                <input id="title" type="text" name="title" size="35">
                            </li>
                            <li>
                                <p>
                                    <label for="comments">コメント</label>
                                </p>
                                <textarea id="comments" name="comments" rows="7" cols="60"></textarea>
                            </li>
                        </ul>
                            <p>
                                <input class="submit" type="submit" value="投稿する" />
                            </p>
                    </form>
                <?php
                foreach($stmt as $row) {
                echo "<div class='board'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "</div>";
                    echo "<div class='handlename'>";
                    echo "posted by ".$row['handlename'];
                    echo "</div>";
                echo "</div>";
                }
                ?>
                </div>
                <div class="right">
                <h4>人気の記事</h4>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h4>オススメリンク</h4>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h4>カテゴリ</h4>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
                </div>
            </div>
        </main>
        <footer>
            copyright © internous│4each blog the which provides A to Z about programming.
        </footer>
    </body>

</html>