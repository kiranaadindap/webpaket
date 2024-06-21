<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    
    $akun = "SELECT * FROM akun2 WHERE Username = '$Username' AND Password = '$Password'";
    $result = $koneksi->query($akun);

    if ($result->num_rows > 0) {
        $_SESSION["Username"] = $Username;
        header("Location:user/index.php");
    } else {
            $_SESSION['error'] = "Username atau Password salah.";
            header("Location: login2.php");
	}
}		
?>
<?php
  session_start();

  if (!isset($_SESSION['Username'])) {
    header("Location: login2.php");
    exit();
  }

  $Username = $_SESSION['Username'];
?>