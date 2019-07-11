<?php
  session_start();

  if (@$_SESSION['level'] == "admin") {
    header("location:index_admin.php");
  } else {

?>
<!DOCTYPE html>
<html>
<head>
<style>

body{
  font-family: sans-serif;
  background: #404040;
}

h1{
  text-align: center;
  /*ketebalan font*/
  font-weight: 300;
}

.tulisan_login{
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  text-transform: uppercase;
}

.kotak_login{
  width: 350px;
  background: white;
  /*meletakkan form ke tengah*/
  margin: 80px auto;
  padding: 30px 20px;
  box-shadow: 0px 0px 100px 4px #333;
}

label{
  font-size: 11pt;
}

.form_login{
  /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}

.tombol_login{
  background: #2aa7e2;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}

.link{
  color: #232323;
  text-decoration: none;
  font-size: 10pt;
}

.alert{
  background: #e44e4e;
  color: white;
  padding: 10px;
  text-align: center;
  border:1px solid #b32929;
}
</style>
  <title>Login Account</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<script>alert('Username/Password Salah!')
  location.href='login.php'</script>";
    }
  }
  ?>
 
  <div class="kotak_login">
    <p class="tulisan_login">Login Rusunawa Depok</p>
 
    <form action="plogin.php" method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
      <input type="submit" name="login" class="tombol_login" value="LOGIN">
 
      <br/>
      <br/>
    </form>
    
  </div>
 
 
</body>
</html>
<?php } ?>