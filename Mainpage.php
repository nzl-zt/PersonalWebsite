<?php
include("SessionControl.php");
?>

<title>MainPage</title>
<!-- I used "onload" for getting message when I open the mainpage. -->
<body class="text-center" position="relative" onload="load_greeting();">
</br>
<h4>This website contains information on javascript, html and css.</h4>
   
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
