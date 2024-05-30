<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO clients (id_user, nama, tanggal_lahir, no_telp, alamat) VALUES ('$id_user', '$nama', '$tanggal_lahir', '$no_telp','$alamat')";

    if (empty($id_user) || empty($nama) || empty($tanggal_lahir) || empty($no_telp) || empty($alamat)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'entry-client.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Client Berhasil Ditambahkan');
                window.location = 'client.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'entry-client.php'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id_client = $_POST['id_client'];
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE clients SET 
            id_user = '$id_user',
            nama = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            no_telp = '$no_telp',
            alamat = '$alamat'
            WHERE id_client = $id_client 
            ";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Client Berhasil Diubah');
                window.location = 'client.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'edit-client.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id_client = $_POST['id_client'];

    $sql = "DELETE FROM clients WHERE id_client = $id_client";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Client Berhasil Dihapus');
                window.location = 'client.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Client Gagal Dihapus');
                window.location = 'client.php';
            </script>
        ";
    }
} else {
    header('location: client.php');
}
?>