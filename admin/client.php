<?php
session_start();

// Periksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION['admin'])) {
    // Jika tidak, arahkan kembali ke halaman login
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | GoInvest</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="menu">
        <ul>
            <li class="profile">
                <div class="imge">
                    <img src="../assets/image/profile.png" alt="personal-photo">
                </div>
                <h2>Admin</h2>
            </li>
            <li>
                <a href="admin.php">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="client.php" class="active">
                    <i class="fas fa-user-group"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li>
                <a href="produk.php">
                    <i class="fas fa-table"></i>
                    <p>Products</p>
                </a>
            </li>
            <li>
                <a href="transaksi.php">
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
        <div class="title-info">
            <p>Clients</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>C001</td>
                    <td>Bagus</td>
                    <td>
                        <button class="btn_detail">Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>C002</td>
                    <td>Tri</td>
                    <td>
                        <button class="btn_detail">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button class="btn-hps">
            Hapus
        </button>
        <button class="btn-tmbh">
            Tambah
        </button>
    </div>
</body>

</html>