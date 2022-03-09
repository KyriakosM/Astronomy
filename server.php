<?php
session_start();

// Αρχικοποίηση Μεταβλητών
$username = "";
$email    = "";
$errors = array(); 

// Σύνδεση με τη βάση δεδομένων
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // Λήψη όλων των input απο την φόρμα συμπλήρωσης
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation
  if (empty($username)) { array_push($errors, "Παρακαλώ δώστε όνομα χρήστη"); }
  if (empty($email)) { array_push($errors,"Παρακαλώ δώστε Email"); }
  if (empty($password_1)) { array_push($errors, "Απαιτείται η συμπλήρωση κωδικού"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Δεν ταιριάζουν οι κωδικοί που δώσατε!");
  }


  // Ελέγχουμε αν υπάρχει χρήστης με το ίδιο username ή email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // Αν υπάρχει ο χρήστης
    if ($user['username'] === $username) {
      array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Το email υπάρχει ήδη");
    }
  }

  // Kάνουμε register τον χρήστη αν δεν υπάρχουν λάθη στη φόρμα προς συπλήρωση
  if (count($errors) == 0) {
  	$password = md5($password_1);//Κρυπτογραφούμε τον κωδικό που αποθηκεύεται στη βάση για λόγους ασφάλειας

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Συνδεθήκατε επιτυχώς!";
  	header('location: index.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Απαιτείται username");
  }
  if (empty($password)) {
  	array_push($errors, "Aπαιτείται κωδικός");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Έχετε συνδεθεί επιτυχώς!";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Λάθος συνδυασμός ονόματος χρήστη / Κωδικού");
  	}
  }
}

?>