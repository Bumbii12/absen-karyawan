<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
  body {
    background-image: url('https://i.pinimg.com/originals/30/f3/15/30f315e3a6242cef3d9c60833173adc4.gif'); 
    background-size: cover; 
    background-position: center; 
  }
  
  h1 {
    font-family: Courier New; 
    color: #6495ED; 
    text-align: center; 
  }
  
  input[type="text"],
  input[type="password"] {
    font-family: Roboto, sans-serif; 
    font-size: 0.9em; 
    color: #333; 
    background: #fff; 
    outline: none; 
    border: 1px solid #ccc; 
    padding: 0.7em; 
    width: 100%; 
    margin: 0.5em 0; 
    box-sizing: border-box; 
  }
  
</style>
</head>
<body>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1 style="text-transform: none; font-family: 'Courier New', monospace; cursor: pointer; color: #000000;" onmouseover="this.style.textShadow='3px 3px 5px #000000'" onmouseout="this.style.textShadow='none'">Login Karyawan</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="pro_login_karyawan.php" method="post">
          <input class="text" type="text" name="username" placeholder="Username" required=""><br>
        
          <input class="text" type="password" name="password" placeholder="Password" required="">
          <div class="wthree-text">
            <label class="anim"></label>
            <div class="clear"></div>
          </div>
          <input type="submit" value="Login" style="font-size: 0.9em; color: #fff; background: #5B9A8B; border: 0px solid #ffffff; cursor: pointer; padding: 0.9em; -webkit-appearance: none; width: 100%; margin: 2em 0; letter-spacing: 4px; font-family: Courier New; transition: background-color 0.3s, border-color 0.3s;" onmouseover="this.style.background='#85E6C5'; this.style.borderColor='#ccc';" onmouseout="this.style.background='#5B9A8B'; this.style.borderColor='#ffffff';">
        </form>
        
      </div>
    </div>
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- //main -->
</body>
</html>
