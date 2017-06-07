<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
    <div id="login_a"></div>
    <div id="login_b">
        <div id="login_ba">Selamat Datang Silahkan Login</div>
        <div id="login_bb">
            <table>
            <form action="login_action.php" method="POST">
                <tr>
                    <td>Username</td>
                </tr>
                <tr>
                    <td><input type="text" class="form" name="username" required></td>
                </tr>
                <tr>
                    <td>Kata Sandi</td>
                </tr>
                <tr>
                    <td><input type="password" class="form" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" class="submit" name="kirim" value="Login"></td>
                </tr>
            </form>
            </table>
        </div>
    </div>
</div>
</body>
    
</body>
</html>