<?php
include("SessionControl.php");
?>


   <title>Contact</title>
    <!-- I used "a href" for giving link my other pages. -->
    <!-- I used "table" to make the page more organized. -->
    <body class="text-center" position="relative">
    
     <p>
    </div>
    <div id=fb>
       <h1>Feedback Form</h1>
             <p>Please fill out this form to help us improve our website.</p>
             <form method = "post" action = "">
                <input type = "hidden" name = "recipient"
                   value = "deitel@deitel.com">
                <input type = "hidden" name = "subject"
                   value = "Feedback Form">
                <input type = "hidden" name = "redirect"
                   value = "main.html">
                <p><label>Name:
                      <input name = "name" id=nmeclr type = "text" size = "25"
                      onfocus="myfocus(this.id)"  onblur="myblur(this.id)"/>
                   </label></p>
                <!-- <textarea> creates a multiline textbox -->
                <p><label>Comments:<br>
                   <textarea id=cmm name = "comments"
                      rows = "4" cols = "36"  onfocus="myfocus(this.id)" onblur="myblur(this.id)"/>Enter comments here.</textarea>
                </label></p>
                <!-- <input type = "password"> inserts a -->
                <!-- textbox whose display is masked with -->
                <!-- asterisk characters -->
                <p><label>E-mail Address:
                   <input name = "email" id=mailclr type = "password"  size = "25" onfocus="myfocus(this.id)"  onblur="myblur(this.id)"/>
                </label></p>

                <p>
                   <strong>Things you liked:</strong><br>
                   <label>Site design
                      <input name = "thingsliked" type = "checkbox"
                         value = "Design"></label>
                   <label>Links
                      <input name = "thingsliked" type = "checkbox"
                         value = "Links"></label>
                   <label>Ease of use
                      <input name = "thingsliked" type = "checkbox"
                         value = "Ease"></label>
                   <label>Images
                      <input name = "thingsliked" type = "checkbox"
                         value = "Images"></label>
                   <label>Source code
                      <input name = "thingsliked" type = "checkbox"
                         value = "Code"></label>
                </p>

                <!-- <input type = "radio"> creates a radio -->
                <!-- button. The difference between radio buttons -->
                <!-- and checkboxes is that only one radio button -->
                <!-- in a group can be selected. -->
                <p>
                   <strong>How did you get to our site?</strong><br>
                   <label>Search engine
                      <input name = "howtosite" type = "radio"
                         value = "search engine" checked></label>
                   <label>Links from another site
                      <input name = "howtosite" type = "radio"
                         value = "link"></label>
                   <label>Deitel.com Web site
                      <input name = "howtosite" type = "radio"
                         value = "deitel.com"></label>
                   <label>Reference in a book
                      <input name = "howtosite" type = "radio"
                         value = "book"></label>
                   <label>Other
                      <input name = "howtosite" type = "radio"
                         value = "other"></label>
                </p>
                <p>
                   <label>Rate our site:

                       <!-- the <select> tag presents a drop-down -->
                       <!-- list with choices indicated by the -->
                       <!-- <option> tags -->
                      <select name = "rating">
                         <option selected>Amazing</option>
                         <option>10</option>
                         <option>9</option>
                         <option>8</option>
                         <option>7</option>
                         <option>6</option>
                         <option>5</option>
                         <option>4</option>
                         <option>3</option>
                         <option>2</option>
                         <option>1</option>
                         <option>Awful</option>
                      </select>
                   </label>
                </p>

                <p>
                   <input type = "submit" value = "Submit">
                   <input type = "reset" value = "Clear">

                </p>
             </form>
    </p>
    </div>
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
