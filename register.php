<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | GoInvest</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo"><a href=''>Go<span>Invest</span></a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="news.php">Berita</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="login.php" class="btn-signin">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="title">Register</div>
        <form action="we.php">
            <div class="field">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="text" required>
                <label>Email address</label>
            </div>
            <div class="field">
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="field">
                <input type="submit" value="Register">
            </div>
            <div class="signin-link">Sudah punya akun? <a href="login.php">Sign In</a></div>
        </form>
    </div>
</body>

</html>