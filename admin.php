<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('location: login.php');
    exit();
}

include 'koneksi.php';

// Fetch dynamic data from the database
$userCount = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS count FROM users"))['count'];
$postCount = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS count FROM clients"))['count'];
$productCount = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) AS count FROM products"))['count'];
$income = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT SUM(jumlah) AS total FROM transactions"))['total'];

// Handle case where total income is null
$income = $income !== null ? $income : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | GoInvest</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <div class="menu">
        <ul>
            <li class="profile">
                <div class="imge">
                    <img src="assets/image/profile.png" alt="personal-photo" />
                </div>
                <h2>Admin</h2>
            </li>
            <li>
                <a href="admin.php" class="active">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="clients/client.php">
                    <i class="fas fa-user-group"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li>
                <a href="product/produk.php">
                    <i class="fas fa-table"></i>
                    <p>Products</p>
                </a>
            </li>
            <li>
                <a href="transactions/transaksi.php">
                    <i class="fas fa-money-check"></i>
                    <p>Transaksi</p>
                </a>
            </li>
            <li class="log-out">
                <a href="../logout.php">
                    <i class="fas fa-sign-out"></i>
                    <p>Log out</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="home-content">
            <h1>Selamat Datang Admin</h1>
        </div>
        <div class="title-info">
            <p>Dashboard</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <div class="data-info">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>User</p>
                    <span><?php echo $userCount; ?></span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-pen"></i>
                <div class="data">
                    <p>Clients</p>
                    <span><?php echo $postCount; ?></span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-table"></i>
                <div class="data">
                    <p>Products</p>
                    <span><?php echo $productCount; ?></span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-dollar"></i>
                <div class="data">
                    <p>Pendapatan</p>
                    <span><?php echo number_format($income, 0, ',', '.'); ?></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>