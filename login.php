<?php
session_start();

$correct_password = "mgukyudo"; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["password"] === $correct_password) {
        $_SESSION["logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "パスワードが違います";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>

<h2>管理者ログイン</h2>

<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
    <input type="password" name="password" required>
    <button type="submit">ログイン</button>
</form>

</body>
</html>