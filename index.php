<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
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
	body{
		background:url("./Multimedia/foot.jpg");
	}
      .cont p {
        letter-spacing: 0.3px;
        color: #404041;
        margin-bottom: 14px;
        margin-top: 11px;
        text-align: left;
        padding-left: 25px;
      }
      .container0 {
        text-align: center;
      }
	  
      .modal {
        z-index: 1;
        display: none;
        padding-top: 10px;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.8);
      }
      .banner-btn {
        padding: 1.2rem 1.5rem;
        display: block;
        border: none;
background-color: #404041;
text-transform: uppercase;
color: white;
outline: 0.2rem solid #404041;
outline-offset: 4px;
cursor: pointer;
transition: all 0.3s ease-in-out;
animation: show 2s ease-in-out 1;
    animation-fill-mode: none;
animation-fill-mode: forwards;
margin: 25px auto 0 auto;
      }
      .modal-content {
        margin: auto;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
#welcome{
	font-size:4rem;
	color:red;
}
      .modal-hover-opacity {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-backface-visibility: hidden;
      }

      .modal-hover-opacity:hover {
        opacity: 0.6;
        filter: alpha(opacity=60);
        -webkit-backface-visibility: hidden;
      }

      .close {
        text-decoration: none;
        float: right;
        font-size: 24px;
        font-weight: bold;
        color: white;
      }
      .container1 {
        width: 200px;
        display: inline-block;
        margin-bottom: 2px;
      }
      .cont {
        margin-bottom: 45px;
      }
      .container1 img {
        width: 200px;
        height: 200px;
        object-fit: cover;
      }
      h3 {
        color: #404041;
        font-size: 1.1rem;
        letter-spacing: 0.5px;
        margin-bottom: 17px;
      }
      .modal-content,
      #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
      }

      @-webkit-keyframes zoom {
        from {
          -webkit-transform: scale(0);
        }
        to {
          -webkit-transform: scale(1);
        }
      }

      @keyframes zoom {
        from {
          transform: scale(0);
        }
        to {
          transform: scale(1);
        }
      }
    </style>
<body>
		<div class="navb" id="navbb">
        <img src="./Multimedia/logo.png" alt="" />
        <div id="navbar">
          <nav>
            <ul>
              <div class="dropdown">
                <li><a href="" class="bb">Είσοδος</a></li>
                
              </div>
              <li><a href="#photos" class="bb">Φωτογραφίες</a></li>
              <li><a href="#videos" class="bb">Βίντεο</a></li>
			  <li><a href="index.html" class="bb">Aποσύνδεση</a></li>

            </ul>
          </nav>
          <div id="bottombar">
            <ul>
              <li><a href="#trips">Προσφορές</a></li>
            </ul>
          </div>
        </div>
      </div>

      <video
        src="./Multimedia/Planets.mp4"
        autoplay
        muted
        loop
        id="myVideo"
      ></video>
	  <div class="hi"><p>Kαλή ξενάγηση </p></div>
     <?php  if (isset($_SESSION['username'])) : ?>
    	<!-- <p> <a href="index.php?logout='1'" style="color: red; ">Αποσύνδεση</a> </p> -->
    <?php endif ?>
	<br>
	<br>
	<br>
	<br> 
    </header>


<div class="fifth" style="margin-top: -100px;box-shadow:0 0 20px white;border-radius:5px;">
<a href="" id="photos"></a>
      <h2 class="with-circle">ΦΩΤΟΓΡΑΦΙΕΣ
		  <?php  if (isset($_SESSION['username'])) : ?>
		<p style="position:absolute; left:-385px; font-size:1.2rem;top:-62px;">Kαλώς ήλθες <strong><?php echo $_SESSION['username']; ?>!</strong></p>
    	
    	<!-- <p> <a href="index.php?logout='1'" style="color: red; ">Αποσύνδεση</a> </p> -->
    <?php endif ?>
	  </h2>

      <!-- Photo Gallery -->
      <!-- ------------- -->

      <div class="container0">
        <div class="cont">
			<p style="margin-left:-68px;margin-top:20px;">Τι θα θέλατε να δείτε;</p>
<a href="#photos" style=" letter-spacing: 0.3px;
color: #404041; margin-left:-1000px;">Φωτογραφίες</a><br>
<a href="#videos"style="letter-spacing: 0.3px;
color: #404041;margin-left:-1050px">Βίντεο</a><br>
<a href="#trips"style="letter-spacing: 0.3px;
color: #404041;margin-left:-1025px">Εκδρομές</a>
<p style="margin-left:-68px;margin-top:20px;">Θα θέλατε να ελέγξετε τις γνώσεις σας;;</p>
<a href="#edw" style=" letter-spacing: 0.3px;
color: #404041; margin-left:-1000px;">Πατήστε εδω!</a><br>
          <h3 style="margin-top: 45px">Γαλαξίες</h3>
          <p style="text-align:center;">
            Οι γαλαξίες αποτελούν τεράστιους σχηματισμούς από αστέρες και
            βρίσκονται εκατομμύρια έτη φωτός <br/>
            μακρυά μας. Υπολογίζεται ότι καθένας τους περιέχει κατά μέσο όρο 80
            δις αστέρες!😮 
            Διακρίνονται σε <br/>σπειροειδείς, ελλειπτικούς και ανώμαλους. Οι ανώμαλοι γαλαξίες τείνουν να μην έχουν συγκεκριμένο σχήμα,<br/> ενω οι σπειροειδείς διακρίνται
            απ'τους ελλειπτικούς (οι οποίοι ονομάζονται έτσι λόγω του σχήματός τους) <br/>λόγω των τεράστιων αποτελούμενων από αστέρες σπειρών τους που ξεκινούν από το 
            κέντρο τους και <br/>φθάνουν μέχρι την περιφερεια τους, όπως για παράδειγμα ο γαλαξίας της δεύτερης κατά σειρά εικόνας. <br/>Μπορείς να ξεχωρίσεις και τους υπόλοιπους σπειροειδείς? 😀
          </p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal1.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal2.jpg"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal4.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal5pn.png"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal7.jpg"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal8.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal9.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal10.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal11.webp"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal13.webp"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/gal14.jpeg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extra1.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extra2.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extra3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extra4.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
        </div>
        <div class="cont">
          <h3>Νεφελώματα</h3>
          <p style="text-align:center;">
            Τα Νεφελώματα αποτελούν συγκεντρώσεις σκόνης και αερίων και αποκτούν
            αυτά τα υπέροχα χρώματα όταν το<br/>
            φως άλλων αστεριών φωτοβολεί πάνω τους. Eπίσης μπορεί στο εσωτερικό τους να περιεχουν αστέρια, τα οποία<br/>
             τα φωτίζουν και μπορούμε εμείς να τα παρατηρήσουμε. Σήμερα οι επιστήμονες πιστεύουν ότι τα νεφελώματα που φαίνονται <br/>
             να έχουν κυκλικό σχήμα είναι εξαιτίας αστέρων που αποβάλουν αέρια από την επιφάνεια τους, ενώ τα υπόλοιπα που<br/> 
             παρατηρούμε να έχουν ένα "τυχαίο" ακανόνιστο σχήμα θεωρείται ότι γεννούν νέα αστέρια σαν το Ηλίο μας! 🌞
            <br/>Μπορείτε να βρείτε ποια νεφελώματα αποτελούν τα μαιευήρια νέων αστέρων? 😀
          </p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb1.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb2.JPG"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb3.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb4.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb5.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb6.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb7.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb8.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb9.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/neb10.JPG"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extra5.JPG"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extra6.JPG"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          
        </div>
        <div class="cont">
          <h3>Πλανήτες</h3>
          <p style="text-align:center;">
            Γύρω από τους αστέρες υπάρχουν πλανήτες σε τροχιά. Εδω βλέπουμε τους
            πλανήτες του ηλιακού μας<br/>
            συστήματος, οι οποίοι είναι και οι μόνοι που έχουν φωτογραφηθεί προς
            το παρόν. Η Γη μας,🌍 <br/>
            αποτελεί τον μοναδικό πλανήτη στο σύμπαν που γνωρίζουμε ότι φιλοξενεί ζωή. Στους υπόλοιπους πλανήτες <br/>
            που γνωρίζουμε δεν είναι δυνατή η ανάπτυξη ζωής καθώς έχουν πολύ χαμηλή ή υψηλή θερμοκρασία, καθόλου <br/>
            ή ελάχιστο οξυγόνο και παντελή έλλειψη νερού σε υγρή μορφή! Εχεις ακούσει μήπως για έναν πλανήτη που είναι <br/>
            κοντά στη Γη και θα μπορούσε στο παρελθόν να έχει ζωή? Το όνομα του αρχίζει απο Α και έχει αρκετά κόκκινο χρώμα...
          </p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet1.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet3.webp"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet4.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet5.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet6.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet7.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/planet8.jpeg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <h3 style="margin-top:30px; color:#404041;">Eξωπλανήτες</h3>
          <p style="text-align:center;"> Εκτός όμως απο τον Ήλιο μας, έχουν και άλλα αστέρια πλανήτες γύρω τους που δεν έχουμε μπορέσει ακόμα να τους φωτογραφίσουμε.. <br> 
          Μπορούμε όμως να τους ζωγραφίσουμε με τη φαντασία μας...💡  </p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extrap4.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extrap3.jpeg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extrap2.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/extrap1.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>

        </div>
        <div class="cont">
          <h3>Μαύρες Τρύπες και αστέρες Νετρονίων</h3>
          <p style="text-align:center;">
            Tα αποκαλούμενα "εξωτικά" αστρικά σώματα, οι μελανές οπές και οι
            αστέρες νετρονίων αποτελούν <br />τα απομεινάρια του θανάτου των αστεριών. Όταν τα αστέρια μεγάλης μάζας φτάσουν στο τέλος της<br />
             ζωής τους τότε κάνουν μια μεγάλη έκρηξη🎇 και διαλύονται αφήνοντας πίσω τους τον εσωτερικό τους<br />
              πυρήνα ο οποίος θα έχει πλέον γίνει μια μελανή οπή, ένας αστέρας νετρονίων ή ένας λευκός νάνος αν ο<br /> αστέρας είναι μικρότερης μάζας... Μπορείς να εντοπίσεις τις μαύρες τρύπες στις παρακάτω φωτογραφίες?? <br />
              Όπως λέει και το όνομα τους είναι.. μαύρες, γιατι έχουν πολύ μεγαλή βαρύτητα που δεν αφήνουν όυτε το φως να δραπετεύσει...😯
          </p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a1.webp"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a2.jpg"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a4.webp"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a5.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a6.jpg"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a7.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/a8.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/ex4.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/ex3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/ex2.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/ex1.jpeg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
        </div>
        <div class="cont">
          <h3>Υπερκαινοφανείς / SuperNova</h3>
          <p style="text-align:center;">
            Πολλοί αστέρες κατά το τέλος της ζωής τους εκρήγνυνται θεαματικά
            αφήνοντας μας τη δυνατότητα <br />να καταγράψουμε τις παρακάτω
            υπέροχες φωτογραφίες...
          </p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova12.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova1.jpg"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova2.jpeg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova4.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nona5.webp"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova6.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova7.webp"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br />
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova8.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova9.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova10.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/nova11.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <br>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/e4.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/e3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/e2.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/e1.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
        </div>
        <div class="cont">
          <h3>Eξορμήσεις</h3>
          <p style="text-align:center;">Έλα και συ μαζί μας! Δες τι εκδρομή έχουμε γι'αυτό το ΣΚ και επικοινώνησε μαζί μας!</p>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/f1.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/f2.jpeg"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/f4.jpeg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
          <div class="container1">
            <img
              src="./Multimedia/Gallery/f3.jpg"
              style="max-width: 100%; cursor: pointer"
              onclick="onClick(this)"
              class="modal-hover-opacity"
            />
          </div>
        </div>
      
      </div>
      <div id="modal01" class="modal" onclick="this.style.display='none'">
        <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <div class="modal-content">
          <img id="img01" style="max-width: 100%" />
        </div>
      </div>
	  
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="fifth" style="margin: -240px auto 0 auto; display: block; box-shadow:0 40px 35px white; ">
	<a href="" id="videos"></a>
      <h2 class="with-circle" style="margin: 0 auto 0 auto; margin-left: 50%; transform: translateX(-120px);">BΙΝΤΕΟ</h2>
      <br />
      <h3>
        Kάθε εβδομάδα προστίθενται νέα βίντεο για όλα τα μέλη της σελίδας μας!
      </h3>
      <div class="vid">
      
        <iframe width="330" height="240" src="https://www.youtube.com/embed/PeNuj2GH8xg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      <iframe width="330" height="240" src="https://www.youtube.com/embed/VkW54j82e9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="330" height="240" src="https://www.youtube.com/embed/Qd6nLM2QlWw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <iframe width="330" height="240" src="https://www.youtube.com/embed/7XseVrmpkUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <iframe width="330" height="240" src="https://www.youtube.com/embed/EXasopxAFoM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <iframe width="330" height="240" src="https://www.youtube.com/embed/puiTMJNACVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <iframe width="330" height="240" src="https://www.youtube.com/embed/vGw0l8qLlOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <iframe width="330" height="240" src="https://www.youtube.com/embed/0rHUDWjR5gg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <iframe width="330" height="240" src="https://www.youtube.com/embed/ppajpMosxQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="330" height="240" src="https://www.youtube.com/embed/Vb2ZXRh74WU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="330" height="240" src="https://www.youtube.com/embed/9dGwkrmnDZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="330" height="240" src="https://www.youtube.com/embed/7XseVrmpkUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
      </div>
      <hr style="margin-top:27px;">
      <a id="trips"></a>
            <h2 class="with-circle" style="margin: 51px auto 0 auto; margin-left: 47%; transform: translateX(-120px);">ΕΚΔΡΟΜΗ</h2>
            <br />
                      <img src="./Multimedia/kidsplaying.jpg" style="outline: thick ridge var(--yellow2); box-shadow:0 0 15px black;outline-offset: 6px;display:block;margin:116px auto 10px auto;">

      <h3 style="margin-top:58px;">
        Aυτό το Σάββατο πάμε εκδρομή στο πλανητάριο! Επικοινώνησε μαζί μας 📞για περισσότερες λεπτομέρειες!
      </h3>
      <div class="subscribe" style="margin:45px auto 10px auto;width:900px;">
      <form action="mailto:kyriakosmgr@gmail.com">
        <span id="in">
          <i class="fa fa-chevron-right" aria-hidden="true" id="e"></i>

          <input
            type="text"
            placeholder="Καταχωρείστε το τηλ/νο σας να σας καλέσουμε"
          />
        </span>

        <input type="submit" value="SUBMIT" style="margin-left:-12px;" />
      </form>
        

          </div>
          <a id="edw"></a>
          <h3 style="margin-top:58px;">
        Quiz test για τους μικρούς μας φίλους!
      </h3>
      <button
          class="banner-btn"
          id="aa"
          onclick="window.location.href='quiz.html'"
        >
          Kάντε το Quiz!
        </button>
    </div>
	<a id="bot"></a> 
    <footer>
     
      <div class="footer">
        <div class="inside-footer">
          <img
            width="150"
            style="margin-left: -6px; width: 200px"
            src="./Multimedia/logo.png"
            alt=""
          />
          <p class="pfoot">
            Για οποιαδήποτε απορία, διευκρίνιση <br />
            ή πρόταση μη διστάσετε να επικοι-<br />
            νωνήσετε μαζί μας καθημερινά <br />
            από τις 9:00πμ εας και τις 8:30μμ
          </p>
          <br />
          <i class="fa fa-phone fa-lg pfoot2"></i
          ><span class="pfoot2" style="margin-left: 10px">697 00 00 000</span
          ><br />
          <i class="fa fa-map-marker fa-lg pfoot2"></i
          ><span class="pfoot2" style="margin-left: 10px">
            Μ. Καραολή & Α. Δημητρίου 80</span
          ><br />
          <i class="fa fa-facebook-square fa-lg pfoot2"></i
          ><span class="pfoot2" style="margin-left: 10px"
            >Βρείτε μας στο Facebook</span
          >
        </div>
        
        <div class="inside-footer3">
          <p class="pfoot2" style="margin-left: 10px; margin-bottom: 20px">
            Νέες Προσφορές
          </p>
          <p class="pfoot" style="margin-left: 10px">
            Από αρχές του μήνα έκπτωση <br />
            40% για αγορές άνω των 50 ευρώ!
          </p>
          <p class="pfoot2" style="margin-left: 10px; margin-bottom: 20px">
            Ακούμε τις προτάσεις σας
          </p>
          <p class="pfoot" style="margin-left: 10px">
            Απολύτως εξατομικευμένα προγράμματα<br />
            παρατηρήσεων σύμφωνα με τις ανάγκες σας!
          </p>
          <p class="pfoot2" style="margin-left: 10px; margin-bottom: 20px">
            Nέα πακέτα
          </p>
          <p class="pfoot" style="margin-left: 10px">
            Μείνετε συντονισμένοι για νεα πακέτα<br />και προσφορές που
            ανακοινώνονται <br />συνεχώς
          </p>
        </div>
      </div>
	  
    </footer>
    <a href="#top" id="arrow-top">
      <img src="./Multimedia/yelowup.jpg" width="40px" style="margin-top: 7px;margin-left: 5px;">
    </a>
	<!----------- Javascript ---------->
    <!--------------------------------->

    <script>
      // animations on scroll
      let x = 0;
      window.onwheel = (e) => {
        if (e.deltaY >= 0 && x < 43) {
          x++;

          if (x < 2) {
            document.getElementById("navbb").classList.remove("navb2");
          } else if (x > 1 && x <= 3) {
            document.getElementById("navbb").classList.add("navb2");
          } else if (x > 6 && x < 8) {
            document.getElementById("third").classList.add("third2");
          } else if (x > 26 && x < 28) {
            document.getElementById("aa").classList.add("mystyle");
          }
        } else {
          if (x > 0) {
            x--;
            console.log(x);
          }
          if (x < 2) {
            document.getElementById("navbb").classList.remove("navb2");
          }
        }
      };
	  function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
      }
   
    </script>
</body>
</html>