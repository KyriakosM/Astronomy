<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Astronomy for Kids</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kalam&display=swap"
      rel="stylesheet"
    />
	<style>
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.abc{
    width: 70%;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  padding: 30px;
}
.modal-content {
  box-sizing: border-box;
  background-color: #fefefe;
  margin: 5% auto 82px auto; 
  border: 1px solid #888;
  padding: 40px;
  width: 70%; 
  box-shadow: 5px 10px 10px #888888;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 37%;
  border-radius: 60%;
}
span.psw {
  float: right;
  padding-top: 16px;
}
body{
	background:url("./Multimedia/foot.jpg");
}
.input-group{
 margin-bottom:6px;
}

  </style>
  </head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
<!-- Sign Content -->
 <section style="padding:40px 20px 30px 40px;
    background: #e6e5e1; width: 800px; margin: -30px auto 0 auto;box-shadow: 0px 0px 25px white;">
	 <h2 class="with-circle" style="position:static; margin-left: 36%; ">ΣΥΝΔΕΣΗ</h2>
    
	<div id="id01" class="modal">

  <form method="post" action="login.php" class="modal-content animate">
  	<?php include('errors.php'); ?>
	  <div class="imgcontainer">
      <img src="./Multimedia/pc-kid.jpg" alt="Avatar" class="avatar">
    </div>
  	<div class="input-group ">
  		<label><b>'Ονομα χρήστη</b></label>
  		<input type="text" name="username" placeholder="Enter Username">
  	</div>
  	<div class="input-group">
  		<label><b>Κωδικός</b></label>
  		<input type="password" name="password" placeholder="Enter Password">
  	</div>
  	<div class="input-group">
		  <button type="reset" class="cancelbtn">Ακύρωση</button>
  		<button type="submit" class="btn" name="login_user">Σύνδεση</button>
  	</div>
  	<p>
  		Δεν είσαι μέλος? <a href="register.php">Γράψου!</a>
  	</p>
  </form>

</div>

</body>
</html>


