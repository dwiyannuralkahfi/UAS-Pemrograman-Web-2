<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
 <meta charset="UTF-8">
 <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
 <!-- <title>Login Form</title> -->
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
 <div class="center">
 <div class="header">
Login Form</div>
<form action="proseslogin.php" method="POST">
  <input type="text" placeholder="Username" name="username">
  <i class="far fa-envelope"></i>
  <input id="pswrd" type="password" placeholder="Password" name="password">
  <i class="fas fa-lock" onclick="show()"></i>
  <input type="submit" value="Sign in">
  <a href="daftar.php">Belum Punya Akun?</a>
 </form>
</div>
<script>
  function show(){
   var pswrd = document.getElementById('pswrd');
   var icon = document.querySelector('.fas');
   if (pswrd.type === "password") {
    pswrd.type = "text";
    pswrd.style.marginTop = "20px";
    icon.style.color = "#7f2092";
   }else{
    pswrd.type = "password";
    icon.style.color = "grey";
   }
  }
 </script>
 
</body>
</html>
