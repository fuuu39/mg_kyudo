<?php
session_start();

$correct_password = "adminhepborn"; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["password"] === $correct_password) {
        $_SESSION["logged_in"] = true;
        header("Location: register.php");
        exit;
    } else {
        $error = "パスワードが違います";
    }
}
?>

<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理ページログイン</title>
    <!-- <meta name="description" content="明治学院大学体育会弓道部OB・OG専用ページのログイン画面です。"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/menu-button.js"></script>
    <link rel="icon" href="../images/topicon.gif" sizes="16*16" type="image/gif" />
    <link rel="icon" href="../images/topicon.gif" sizes="32*32" type="image/gif" />
    <link rel="icon" href="../images/topicon.gif" sizes="48*48" type="image/gif" />
    <link rel="icon" href="../images/topicon.gif" sizes="62*62" type="image/gif" />
    <link rel="shortcut icon" href="../images/topicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="../css/login.css" rel="stylesheet">
    <meta name="keywords" content="明治学院大学,明学,MG,MGU,弓道,弓道部,弓,都学,東京都学生弓道連盟,全日本学生弓道連盟,戸塚,白金,学生弓道,体育会" />
    <meta name="robots" content="noindex">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Shippori+Mincho&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ここからheader -->
    <header class="header">
        <div class="header-inner">
            <a class="header-logo" href="../index.html">
                <img src="../images/mainlogo.png" alt="明治学院大学体育会弓道部" > <!-- width="600" height="72"--> 
            </a>
            <button class="toggle-menu-button"></button>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <li><a href="../schedule.html">活動予定</a></li>
                        <li><a href="../result.html">試合結果</a></li>
                        <li><a href="../freshman.html">入部を希望される方へ</a></li>
                        <li><a href="../login.php">OB・OGの方へ</a></li>
                        <!-- <li><a href="../member.html">部員・部体制</a></li> -->
                        <!-- <li><a href="../access.html">アクセス</a></li> -->
                        <!-- <li><a href="../links.html">リンク集</a></li> -->
                    </ul>
                </nav>
            </div>
            <div id="mask"></div>
        </div>
    </header>
    <!-- ここまで -->

    <!-- ここからmain -->
    <main class="main">
        <div class="login">
            <h2>管理ページログイン</h2>
            <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
            <form method="post">
                <input type="password" name="password" required>
                <button type="submit">ログイン</button>
            </form>
        </div>
    </main>
    <!-- ここまで -->

    <!-- ここからfooter -->
    <footer class="footer">
        <nav class="site-menu">
            <ul>
                <li><a href="../schedule.html">活動予定</a></li>
                <li><a href="../result.html">試合結果</a></li>
                <li><a href="../freshman.html">入部を希望される方へ</a></li>
                <li><a href="../login.php">OB・OGの方へ</a></li>
                <li><a href="../member.html">選手紹介</a></li>
                <li><a href="../access.html">アクセス</a></li>
                <!-- <li><a href="../links.html">リンク集</a></li> -->
            </ul>
            <ul class="sns-button">
                <li><a href="https://www.instagram.com/mgu_kyudo/" target="_blank"><img src="../images/Instagram_Glyph_White.png" alt="Instagram"></a></li>
                <li><a href="https://x.com/mg_kyudo" target="_blank"><img src="../images/logo-white.png" alt="X"></a></li>
            </ul>
        </nav>
        <p class="copyright"><small>&copy; 2026 明治学院大学体育会弓道部 All rights reserved.</small></p>
    </footer>
    <!-- ここまで -->



</body>
</html>