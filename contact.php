<?php

if($_POST["message"]) {

mail("raquelicruz94@gmail.com", "Costumer Inquiry",

$_POST["insert your message here"]. "From: an@email.address");

}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
  </head>
  <a href="index.html"><img id="liImage" src="booking-website-logo.jpg.png" alt="Your logo here."></a>
  <body>
  <div id="firstDiv" style="">
    
  <navbar>
  <ul>
      <li><a href="index.html" style="text-decoration:none" class="navlinks"><font color="hotpink"><b>HOME</b></a></li>
      <li><a href="services.html" style="text-decoration:none" class="navlinks"><font color=" hotpink"><b>SERVICES</b></a></li>
        <li><a href="booking" style="text-decoration:none" class="navlinks"><font color="hotpink"><b>BOOKING</b></a></li>
          
    </ul>
    </nav>
    
  </div>
    <body>
      <h1 id="contactHeader">Contact</h1>
    
    <div id="contactDiv">
    <section id="contact">
    
    <p id="sendmessage">Send a message!</p>
    <form id="contactform" action="mailto:raquelicruz94@gmail.com" method="post">
      <br>
      <br>
      <label for="firstname" id="firstnamelabel" class="labelclass"><b>First Name</label>
        <br>
        <br>
        <input type="text" class="textinput" required placeholder="First Name">
        <br>
        <br>
        <label for="lastname" id="lastnamelabel" class="labelclass"><b>Last Name</label>
          <br>
          <br>
          <input type="text" class="textinput" required placeholder="Last Name">
          <br>
          <br>
          <label for="email" id="emaillabel" class="labelclass"><b>Email</label>
            <br>
            <br>
            <input type="email" class="textinput" required placeholder="Email">
            <br>
            <br>
            <label for="dropdown" id="dropdownlabel" class="labelclass"><b>I'm inquiring about:</label>
              <br>
              <br>
              <select>
                <option value="shipping">An appointment</option>
                <option value="other">Other</option>
              </select>
              <br>
              <br>
              <label for="comments" id="additionalcomments" class="labelclass">Additional Comments </label>
              <br>
              <br>
              <textarea rows="10" cols="60" id="textareaid"></textarea>
              <br>
              <br>
              <button onclick="display()" type="submit" class="submitbutton"><b>Submit</button>
              <p id="submitMessage"></p>      
      <form>
        
        <br>
        <br>
    <section>
      </div>
    <style>
        html {
          background-color: snow;
            
        }
        #firstDiv {
          background-color: snow;
          height : 80px;
          display: flex;
          
          
        }

        li {
          font-family: Monaco;
          font-size: 25px;
          display: inline;
          padding: 80px;
          
        }

        #liImage {
          width: 245px;
          height: 80px;
          float: left;
          
        }
        navbar {
         float: right;
        }

        body {
          margin: 0;
        }

        #contactHeader {
          padding-top: 10%;
          text-align: center;
          font-family: Monaco;
        }

        #contactDiv {
          display: flex;
          justify-content: center;
          background-color: lavenderblush;
          margin: 10%;
          font-family: Monaco;
          font-size: 20px;
          border-radius: 12px;
          border: 5px solid lavenderblush;
        }

        .textinput {
          height: 30px;
          width: 100%;
          border-radius: 5px;
          border: none;
        }

        textarea {
          border: none;
          border-radius: 5px;
        }
        select {
          width: 100%;
         
        }

        .submitbutton {
         
          background-color: hotpink;
          border: none;
          width: 100px;
          height: 30px;
          border-radius: 5px;
          font-size: 20px;
        }


        
      footer {
  background-color: palevioletred;
  
  
  
}
.socialMediaIcon {
  width: 40px;
  height: 40px;
  
}
      
        </style>
        <footer>
    <span id="footerDiv">
    <img src="facebook-emblem.jpg" class="socialMediaIcon" alt="Facebook icon">
    <img src="1200px-Instagram_logo_2016.svg.png" class="socialMediaIcon" alt="Instagram icon">
      <img src="124021.svg" class="socialMediaIcon" alt="Twitter Icon">
    </span>
  </footer>
        <script>
          let feedback = ['Thank you for contacting us! We will be sure to get back to you shortly.'];
function message(){
  let submitMessageVar = feedback[0];
  return submitMessageVar;
} submitMessageVar();
function display(){
  document.getElementById('submitMessage').innerHTML = message();
}
        </script>
    </body>
</html>
