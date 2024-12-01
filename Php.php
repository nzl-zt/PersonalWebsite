<?php
include("SessionControl.php");
?>

    <title>Phpinfo</title>
    <body class="text-center" position="relative">
    <!-- I used "a href" for giving link my other pages. -->
    <!-- I used "table" to make the page more organized. -->
  
     <p>
       <h2>What is PHP?</h2>
       PHP is a web-based, open source programming language that is widely used today. It is especially used to develop web applications and create dynamic web pages.</br>PHP runs on the server side and can be embedded in HTML.
<br /><a href = "https://www.w3schools.com/php/">You can click the <em>link</em></a> for more information.</p>

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
