<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
     <div class="center">
     <div class="header">
        Daftar Akun Login
      </div>
    <form action="prosesdaftar.php" method="POST">
      <input type="text" placeholder="Username" name="username">
      <i class="far fa-envelope"></i>
      <input id="passwrd" type="password" placeholder="Password=" name="password">
      <i class="fas fa-lock" onclick="show()"></i>

      <input type="submit" value="Daftar" align="center" name="daftar">
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
