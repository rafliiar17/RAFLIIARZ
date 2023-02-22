<?php
session_start();

if(isset($_POST['submit'])) {
    // Proses validasi login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koneksi ke database
    // $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
        include 'config/db_access.php';
    // Query untuk memeriksa apakah pengguna ada dalam database
    $query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    // Jika pengguna ada dalam database dan id_role user, berikan akses ke halaman user
    if($count == 1 && mysqli_fetch_assoc($result)['id_role'] == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['id_role'] = 1;
        header('Location: pages/users/users.php');
        exit();
    }
    // Jika pengguna ada dalam database dan id_role admin, berikan akses ke halaman admin
    elseif($count == 1 && mysqli_fetch_assoc($result)['id_role'] == 0) {
        $_SESSION['username'] = $username;
        $_SESSION['id_role'] = 0;
        header('Location: pages/admin/admin.php');
        exit();
    } 
    else {
        // Jika pengguna tidak ada dalam database, tampilkan pesan kesalahan
        $error_msg = "Nama pengguna atau kata sandi salah";
    }
}

?>
