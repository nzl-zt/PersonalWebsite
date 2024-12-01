<?php

if(@$_SESSION["oturum"])
{
  header("location:Contents.php");
}

?>

<?php
include("Connect.php");

$username_err=$password_err="";


if(isset($_POST["lgn"]))
{
  if(empty($_POST["uname"]))
  {
    $username_err="Username can not be empty...";
  }
  else
  {
    $name= $_POST["uname"];
  }

  if(empty($_POST["passw_"]))
  {
    $password_err="Password place can not be empty...";
  }
  else
  {
    $password=($_POST["passw_"]);
  }
  
  



  
  if(isset($name)&&isset($password))
  {
    $select="SELECT*FROM users WHERE username='$name'";
    $start_=mysqli_query($cnnct,$select);
    $numbofrecord=mysqli_num_rows($start_);
    if($numbofrecord>0)
    {
      $relatedrecord=mysqli_fetch_assoc($start_);
      $passwwhash=$relatedrecord["passw"];
      if(password_verify($password,$passwwhash))
      {
        session_start();
        $_SESSION["username"]=$relatedrecord["username"];
        $_SESSION["email"]=$relatedrecord["email"];
        $_SESSION["oturum"]=true;
        header("location:Contents.php");
      }
      else
      {
        echo '<div style="border-style: groove; background-color:grey;">Password is wrong..</div>';
      }
    }
    else
    {
      echo '<div style="border-style: groove; background-color:grey;">No user with this username was found...</div>';
    }
  }
  mysqli_close($cnnct);
}
?>


<!Doctype html>
<html>
  <head>
  <meta charset = "utf-8">
     <!-- I used meta for being more visible on the web. -->
     <meta name="description" content="web page, design, HTML5, CSS,JQuery,tutorial, personal, 
     help, index, form,
     contact, feedback, list, links,software blog">
    <meta name="keyword" content="HTML, CSS, JQuery">
    <title>Login</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "cs.css">
    <script type = "text/javascript"  src = "server.js" ></script>

    <title>Sign In</title>


    <!-- Bootstrap core CSS -->
   

    <!-- Custom styles for this template -->

  </head>

  
  <header>
      <h3>SOFTWARE BLOG</h3>
  </header>
</br>
  
  <body class="text-center" position="relative">
    <div class="d-flex justify-content-center">
    <form action = "Login.php" method="POST" class="registrationform" >
      <h5 class="h3 mb-3 font-weight-normal">Login</h5>
      
      <input type="text" class="form-control 
      <?php
         if(!empty($username_err))
         {
          echo "is-invalid";
         }
         ?>
      " id="inputUsername" name="uname" placeholder="Username" required autofocus>
        <div id="validationServer03Feedback" class="invalid-feedback"
         ><?php echo $username_err?></div>
         <br/>
        
      <input type="password" name="passw_" id="inputPassword" class="form-control
      <?php
         if(!empty($password_err))
         {
          echo "is-invalid";
         }
         ?>
      " placeholder="Password">
      <div id="validationServer03Feedback" class="invalid-feedback"><?php echo $password_err?>.</div>
        </br>
      <button class="btn btn-primary btn-group-justified" type="submit" name="lgn">Login</button>
    </form>
    </div>


        </br> 

    </div>
    <form id=frm>
     <p>
       <label>
         Background color:
         <input type = "text"  name = "background" size = "10" onchange = "setColor('background', this.value)" />
       </label>
       <br />
       <label>
         Foreground color:
         <input type = "text"  name = "foreground" size = "10" onchange = "setColor('foreground', this.value)" />
       </label>
       <br/>
     </p>
   </form>
  </body>
</html>
