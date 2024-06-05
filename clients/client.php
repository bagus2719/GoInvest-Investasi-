<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('location: ../login.php');
    exit();
}

include '../koneksi.php';

// Query SQL untuk mengambil data dari tabel clients
$sql = "SELECT * FROM clients";
$result = mysqli_query($koneksi, $sql);
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
                <a href="../admin.php">
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
                <a href="../product/product.php">
                    <i class="fas fa-table"></i>
                    <p>Products</p>
                </a>
            </li>
            <li>
                <a href="../transactions/transaksi.php">
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
            <p>Data Clients</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <a href="entry-client.php"><button class="btn-tmbh">
                TAMBAH DATA
            </button></a>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>No. Telpon</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['id_user'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['tanggal_lahir'] . "</td>";
                    echo "<td>" . $row['no_telp'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit-client.php?id=" . $row['id_client'] . "' class='btn-edit'>Edit</a> ";
                    echo "<a href='delete-client.php?id=" . $row['id_client'] . "' class='btn-hps'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>