<?php
include '../koneksi.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'client.php';
      </script>
    ";
}

$sql = "SELECT * FROM clients WHERE id_client = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('location: ../login.php');
    exit();
}

include '../koneksi.php';

// Query SQL untuk mengambil data dari tabel users
$sql_users = "SELECT * FROM users";
$result_users = mysqli_query($koneksi, $sql_users);
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
                <a href="../product/produk.php">
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
            <p>Tambah Data Clients</p>
            <i class="fas fa-chart-bar"></i>
        </div>

        <form action="proses-client.php" method="POST" class="form-tambah">
            <input type="hidden" name="id_client" value="<?= $data['id_client'] ?>">
            <label for="id_user" nama="id_user">ID User</label>
            <select id="id_user" name="id_user" required>
                <option value="" disabled>PILIH ID USER</option>
                <?php
                while ($row_users = mysqli_fetch_assoc($result_users)) {
                    $selected = ($row_users['id_user'] == $data['id_user']) ? 'selected' : '';
                    echo "<option value='" . $row_users['id_user'] . "' $selected>" . $row_users['id_user'] . "</option>";
                }
                ?>
            </select>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama" value="<?= $data['nama'] ?>" required>

            <label for=" tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir"
                value="<?= $data['tanggal_lahir'] ?>" required>

            <label for="no_telp">No. Telepon</label>
            <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?= $data['no_telp'] ?>"
                required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" placeholder="Alamat" required><?= $data['alamat'] ?></textarea>

            <button type="submit" name="edit" class="btn-tmbh">Update</button>
        </form>
    </div>
</body>

</html>