<?php

include 'koneksi.php';

if (isset($_POST['login'])) {
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$requestUsername'";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        die("Query Error: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($requestPassword, $row['password'])) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header('location: admin.php');
                exit();
            } else {
                header('location: page-user.php');
                exit();
            }
        } else {
            echo "
            <script>
                alert('Username atau password anda salah, Silahkan coba lagi');
                window.location = 'login.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('Username atau password anda salah, Silahkan coba lagi');
            window.location = 'login.php';
        </script>
        ";
    }
}