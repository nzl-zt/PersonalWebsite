<?php
include("SessionControl.php");
?>
    <title>Cssinfo</title>
    CSS is a language which is used for styling and laying out web pages..It stands for Cascading Style Sheets.
    <body class="text-center" position="relative">
    <!-- I used "a href" for giving link my other pages. -->
    <!-- I used "table" to make the page more organized. -->
 
     <p>
       <h2>What CSS?</h2>
       
<br /><a href = "https://www.w3schools.com/css/">You can click the <em>link</em></a> for more information.</p>


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
