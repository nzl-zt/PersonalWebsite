//   An example to illustrate the load event
// The onload event handler
function load_greeting () {
  alert("You are visiting the home page of \n" +
        "Software Blog \n" + "WELCOME!!!");
}


// dynValue.js
//   Illustrates dynamic values

var helpers = ["Your username must be at most thirty characters: \n \
",
  "Your email address must have the form: \
 user@domain",
  "Your user ID must have at least six characters",
  "Your password must have at least six \
 characters and it must include one digit",
  "This box provides advice on filling out\
 the form on this page. Put the mouse cursor over any \
 input field to get advice"]

// ***********************************************************
// The event handler function to change the value of the
//  textarea

function messages(adviceNumber) {
  document.getElementById("adviceBox").value =helpers[adviceNumber];
}


// dynColors.js
//   Illustrates dynamic foreground and background colors

// The event handler function to dynamically set the
//  color of background or foreground

function setColor(where, newColor) {
  if (where == "background")
    document.body.style.backgroundColor = newColor;
  else
    document.body.style.color = newColor;
}


//I used "onfocus" for making background and forground of the textbox has a different color when I click that place.
function myfocus(x) {
  document.getElementById(x).style.background = "gray";
  document.getElementById(x).style.color="white";
}
//I used "onblur" for making background and forground of the textbox has a different color when I click a different place.
function myblur(x) {
  document.getElementById(x).style.background = "white";
  document.getElementById(x).style.color="black";
}
