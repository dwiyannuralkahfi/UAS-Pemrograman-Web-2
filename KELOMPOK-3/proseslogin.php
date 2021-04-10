<?php
   session_start();
   require_once("koneksilogin.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];

   $cekuser = mysqli_query($koneksi, "SELECT * FROM tbl_login where username = '$username' ");

    $hasil = mysqli_fetch_array($cekuser);

  
  if(mysqli_num_rows($cekuser) == 0) {
       echo "<div align='center'>Username Belum Terdaftar! <a href='index.php'>Back</a></div>";
      } else {
         if($pass <> $hasil['password']) {
           echo "<div align='center'>Password salah! <a href='index.php'>Back</a></div>";
       } else {
        $_SESSION['username'] = $hasil['username'];
        header('location:halamanutama.php');
     }
   }
?>