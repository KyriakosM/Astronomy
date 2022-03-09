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
    <link rel="stylesheet" href="style.css" />
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
</head>
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
      .modal-content {
  background-color: #fefefe;
  margin: 0 auto 82px auto; 
  border: 1px solid #888;
  padding: 30px;
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
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.abc{
    width: 70%;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  padding: 30px;
}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
body{
	background:url("./Multimedia/foot.jpg");
}
.input-group{
 margin-bottom:6px;
}

  </style>
<body>

<section style="padding:60px 20px 30px 40px;
    background: #e6e5e1; width: 850px;margin: 0px auto 0 auto;margin-top:-62px;box-shadow: 0px 0px 25px white;">
	<h2 class="with-circle" style="position:static; margin-left: 22%; ">ΔΕΝ ΕΙΣΑΙ ΗΔΗ ΜΕΛΟΣ;</h2>

  <form method="post" action="register.php" >
  	<?php include('errors.php'); ?>
	   <div class="container abc" style=" box-shadow: 5px 10px 12px #888888;background: #fefefe; box-sizing:border-box; padding-left:60px; padding-right:60px; margin-bottom:80px; ">
    <h1>Εγγραφή</h1>
    <p>Παρακαλώ συμπληρώστε τα στοιχεία σας για τη δημιουργία λογαριασμού</p>
    <hr> <br>
  	<div class="input-group">
  	  <label ><b>Όνομα χρήστη</b></label>
  	  <input type="text" name="username"placeholder="Γράψτε το username που θα επιθυμούσατε" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label for="email"><b>Διεύθυνση Email</b></label>
  	  <input type="email" name="email"placeholder="Γράψτε το email σας..." value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label><b>Κωδικός</b></label>
  	  <input type="password" placeholder="Πληκτρολογείστε τον κωδικό"name="password_1">
  	</div>
  	<div class="input-group">
  	  <label><b>Επανάληψη Κωδικού</b></label>
  	  <input type="password" placeholder="Επαναπληκτρολογείστε τον κωδικό"name="password_2">
  	</div>
  	<div class="input-group">
		  <button type="reset" class="cancelbtn">Ακύρωση</button>
  	  <button type="submit" class="btn" name="reg_user">Eγγραφείτε</button>
  	</div>
  	<p>
  		Είστε ήδη μέλος? <a href="login.php">Συνδεθείτε</a>
  	</p>
  </form>
  </div>
</section>
</body>
</html>