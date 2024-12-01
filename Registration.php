<?php
include("Connect.php");

$username_err=$email_err=$password_err=$passwordrpt_err="";


if(isset($_POST["sbmt"]))
{
  if(empty($_POST["uname"]))
  {
    $username_err="Username can not be empty...";
  }
  else if(strlen($_POST["uname"])<6)
  {
    $username_err="Username must have at least six characters...";
  }
  else if(!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["uname"]))
  {
    $username_err="Username must contain uppercase and lowercase letters and numbers...";
  }
  else
  {
    $name= $_POST["uname"];
  }


  if(empty($_POST["email_"]))
  {
    $email_err="Email place can not be empty...";
  }
  else if (!filter_var($_POST["email_"], FILTER_VALIDATE_EMAIL)) {
    $email_err = "Invalid email format";
  }
  else
  {
    $emaill= $_POST["email_"];
  }

  if(empty($_POST["passw_"]))
  {
    $password_err="Password place can not be empty...";
  }
  else
  {
    $password=password_hash($_POST["passw_"],PASSWORD_DEFAULT);
  }
  
  if(empty($_POST["passwrpt_"]))
  {
    $passwordrpt_err="The password repeat place can not be empty...";
  }
  else if($_POST["passw_"]!=$_POST["passwrpt_"])
  {
    $passwordrpt_err = "Passwords do not match each other.";
  }
  else
  {
    $passwordrpt=$_POST["passwrpt_"];
  }




  
  if(isset($name) &&isset($emaill) && isset($password) && isset($passwordrpt))
  {
    $addd="INSERT INTO users(username,email,passw) VALUES('$name','$emaill','$password')";
    $startandadd = mysqli_query($cnnct,$addd);
    echo '<div style="border-style: groove; background-color:green;">Successfull.</div>';
  }
  else
  {
    echo '<div style="border-style: groove; background-color:grey;">Could not be added.</div>';
  }
  mysqli_close($cnnct);
}
?>

<!DOCTYPE html>

<html>
   <head>
     <meta charset = "utf-8">
     <!-- I used meta for being more visible on the web. -->
     <meta name="description" content="web page, design,
         HTML5, CSS,JQuery,tutorial, personal, help, index, form,
         contact, feedback, list, links,software blog">
     <meta name="keyword" content="HTML, CSS, JQuery">
     <title>Registration</title>

     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel = "stylesheet" type = "text/css" href = "cs.css">
     <script type = "text/javascript"  src = "server.js" ></script>

 
   <title>Sign Up</title>
   </head>

   <header>
    <h3>SOFTWARE BLOG</h3>
  </header>
   
   
   <body class="text-center" position="relative">
   
    <!-- I used "a href" for giving link my other pages. -->
    <!-- I used "table" to make the page more organized. --></div>
       <br/>
    <h2 style = "font-weight: bold; font-style: italic">To create an account, provide the following:</h2>
        </div>
        
        <div class="d-flex justify-content-center">
         <form action = "Registration.php" method="POST" class="registrationform" >
           <label for="Username1">Username:</label>
           <input type = "text" class="form control 
           <?php
           if(!empty($username_err))
           {
            echo "is-invalid";
           }
           ?>" id="Username1" name="uname" onmouseover = "messages(0)" onmouseout = "messages(4)"/>
           <div id="validationServer03Feedback" class="invalid-feedback">
            <?php echo $username_err?></div>
           <br />

           <label for="InputEmail1">Email:</label>
           <input type = "text"  class="form control
           <?php
           if(!empty($email_err))
           {
            echo "is-invalid";
           }
           ?>"id="InputEmail1" name="email_" onmouseover = "messages(1)" onmouseout = "messages(4)" />
           <div id="validationServer03Feedback" class="invalid-feedback"><?php echo $email_err?></div>
           <br />
           <label for="InputPassword1">Password:</label>
           <input type = "password" class="form control
           <?php
           if(!empty($password_err))
           {
            echo "is-invalid";
           }
           ?>"name="passw_" id="InputPassword1" onmouseover = "messages(3)" onmouseout = "messages(4)"/>
           <div id="validationServer03Feedback" class="invalid-feedback"><?php echo $password_err?>.</div>  
         
           <br />
           <label for="InputPassword1">Password Again:</label>
           <input type = "password" class="form control
           <?php
           if(!empty($passwordrpt_err))
           {
            echo "is-invalid";
           }
           ?>"name="passwrpt_" id="InputPassword1" onmouseover = "messages(3)" onmouseout = "messages(4)" />
           <div id="validationServer03Feedback" class="invalid-feedback"><?php echo $passwordrpt_err?></div>  
           <br /><br />
           <button class="btn btn-lg btn-success btn-block" type="submit" name="sbmt" >Submit</button>
           <button class="btn btn-lg btn-danger btn-block" type="reset" >Reset</button>
         </form>
        </div>
        
          </br></br>
         


    <textarea id = "adviceBox"  rows = "3"  cols = "50">
      This box provides advice on filling out the form
      on this page. Put the mouse cursor over any input
      field to get advice.</textarea>


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
