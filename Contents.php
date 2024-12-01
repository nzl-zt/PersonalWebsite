<?php
include("SessionControl.php");
?>


<title>Contents</title>
<body class="text-center" position="relative">
    <!-- I used "a href" for giving link my other pages. -->
    <!-- I used "table" to make the page more organized. -->
    
     <p>
       <a href = "Html.php">
          <img src = "images/html.png" width = "300px";
             height = "300px" alt = "Html">
       </a>
       <a href = "Js.php">
           <img src = "images/js.png" width = "300px";
              height = "300px" alt = "JS">
        </a>
       <a href = "Css.php">
           <img src = "images/css.png" width = "300px";
              height = "300px" alt = "Css">
        </a>
        <a href = "Php.php">
           <img src = "images/php.png" width = "300px";
              height = "300px" alt = "Css">
        </a>
     </p>

     <form action = "" id=frm>
     <p>
       <label>
         Background color:
         <input type = "text"  name = "background" size = "10"
                onchange = "setColor('background', this.value)" />
       </label>
       <br />
       <label>
         Foreground color:
         <input type = "text"  name = "foreground" size = "10"
                onchange = "setColor('foreground', this.value)" />
       </label>
       <br/>
     </p>
   </form>
 </body>
</html>

    