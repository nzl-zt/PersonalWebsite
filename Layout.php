<?php
session_start();
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

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <link rel = "stylesheet" type = "text/css" href = "cs.css">
     <script type = "text/javascript"  src = "server.js" >
    </script>
   </head>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="navbar-toggler-icon" href=" Mainpage.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="Mainpage.php">MAINPAGE</a></li>
            <li><a class="dropdown-item" href="Contents.php">CONTENTS</a></li>
            <li><a class="dropdown-item" href="Contact.php">CONTACT</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <a class="btn btn-secondary btn-block" button type="button" href="Signout.php">Sign Out</a>
  </div>
  
</nav>
</div>
   
  
  <header>
      <h3>SOFTWARE BLOG</h3>
  </header>
   