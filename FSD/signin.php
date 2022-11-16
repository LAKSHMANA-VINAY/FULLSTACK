<!doctype html>
<html> 
 <head>  
  <link href="signin.css" type="text/css" rel="stylesheet"> 
</head> 
 <body> 
   <center>
   <h1>HEALTH CARE MANAGEMENT</h1>
   <pre>   ** to access doctor enter email:ram123@gmail.com password:ram@123
</pre> 
<?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
    </center>
    <div id="leftbox"> 
    <center>
     DOCTOR
    </center>
    <form onsubmit="return validate()" action="doctorverify.php" method="POST"> 
     <input type="text" class="border" name="email" id="email1" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="pass" id="pass1" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    </form> 
    <br>
    <center> <a href="signupdoctor.html">sign up </a> </center>
   </div> 
   <div id="middlebox"> 
    <center>
     PATIENT
    </center>
    <form onsubmit="return validate()" action="patientverify.php" method="POST"> 
     <input type="text" class="border" name="email" id="email2" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="pass" id="pass2" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    
    </form> <br>
   <center> <a href="signup.html">sign up </a></center>
   </div> 
   <div id="rightbox"> 
    <center>
      BLOOD DONAR
    </center>
    <form onsubmit="return validate()" action="donorverify.php" method="POST"> 
     <input type="text" class="border" name="demail" id="email3" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="dpass" id="pass3" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    </form> <br>
    <center><a href="signupdonor.html">sign up </a></center>
   </div> 
   </center>
 </body>
</html>

