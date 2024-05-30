<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GoInvest</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo"><a href='index.html'>Go<span>Invest</span></a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="news.php">Berita</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="register.php" class="btn-sign-up">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="title">Login</div>
        <form action="login-proses.php" method="post">
            <div class="field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link"><a href="#">forgot password?</a></div>
            </div>
            <div class="field">
                <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">Not a member yet? <a href="register.php">Signup now</a></div>
        </form>
    </div>
</body>

</html>