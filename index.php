<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style/style.css">
    <div>
        <div class="upborder"></div>
    </div>
    <form action="login.php" method="post">
        <label for="username">username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>