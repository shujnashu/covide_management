
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="bara.css" rel="stylesheet">
    <title>COVID-19 Management System</title>
    <style>

input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}
.nachu{
    color:black;
    margin-left:37%;
    padding:0px;
    font-size:50px;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 50px;
  margin-left:90px;
}


#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>






  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Helpline</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="chat/chat.php">Connect with us</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Important Numbers
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">food helpline</a></li>
            <li><a class="dropdown-item" href="#">Child helpline</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Animal helpline</a></li>
          </ul>
        </li>
      
      </ul>
      
    </div>
    <div>
      
<img src="https://media.giphy.com/media/Utb3F8V14wPlNZ5JWI/giphy.gif" alt="" width="60px" height="60px">
    <div>
  </div>


</nav>


</head>
  <body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>

  <div class='popup'>
<div class='cnt223'>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;<font size="" color="red" face=""><b>Welcome To Our Helpline</b></font></h1>
<br>
<p>
 
ସବୁବେଳେ ଆମେ ଆପଣଙ୍କୁ ସାହାଯ୍ୟ କରିବାକୁ ଆସିଛୁ |
ଯଥାଶୀଘ୍ର ଟିକା ନିଅ ଏବଂ ନିଜକୁ ଏବଂ ଅନ୍ୟମାନଙ୍କୁ ସୁରକ୍ଷା ଦିଅ |
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://media.giphy.com/media/GzGEKAPvjtLfe3q7Lm/giphy.gif" alt="" height="200px">

<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>





<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

<div id="wb_element_instance675" class="wb_element wb_text_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="font-family: 'Times New Roman'; text-align: center;">&nbsp;</h2><h2 class="wb-stl-heading2" style="font-family: 'Times New Roman'; text-align: center;">ODISHA IMPORTANT NUMBERS</h2><p>&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,5,5,1);">&nbsp;&nbsp;</span></p><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>CORONA (COVID 19) HELPLINE:&nbsp;&nbsp;011-23978046 ,&nbsp;1075</strong></span></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong></span></p><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>, 0674-2534177</strong></span></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA HELPLINE FOR LOCAL RESIDENTS&nbsp;STUCK IN OTHER STATES&nbsp;&nbsp;:&nbsp;</strong></span>&nbsp;<strong>0674-2392115 / 9438915986</strong>&nbsp;<strong>( WHATSAPP )&nbsp;</strong></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p>


<div>
<h1 class="nachu">CONTACT US</h1>
</div>
<div class="container">

  <form action="action_page.php">

<label for="fname">User Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="fname">Email</label>
    <input type="text" id="fname" name="gmail" placeholder="e.g example@gmail.com">

    <label for="fname">Mobile No.</label>
    <input type="text" id="fname" name="gmail" placeholder="mobile no">

    <label for="fname">Select Symptoms :</label><br>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">Difficult in Breath</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
  <label class="form-check-label" for="inlineCheckbox4">Feeling Week</label>
</div>

<br>
<br>

    <label for="subject">Comments</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>



<p class="wb-stl-normal" style="text-align: center;">&nbsp;&nbsp;<a data-finalurl="https://www.mohfw.gov.in/" data-name="www.mohfw.gov.in/" href="https://www.mohfw.gov.in/" target="_blank"><strong>MINISTRY OF HEALTH AND FAMILY WELFARE</strong>&nbsp;</a></p><p class="wb-stl-normal" style="text-align: center;">&nbsp; &nbsp;</p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><font color="#180969"><b>TOURIST HELPLINE ( FOR TOURIST VISITING PURI ) : 6370967100 ,&nbsp;</b></font><font color="#180969"><b>6370972100</b></font></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><font color="#180969"><b>WOMEN HELPLINE FOR WOMEN PASSENGERS </b></font></p><p class="wb-stl-normal" style="text-align: center;"><font color="#180969"><b>( Puri-Bhubaneshwar-Cuttak Route )</b></font><font color="#180969"><b>&nbsp; &nbsp;</b></font></p><p class="wb-stl-normal" style="text-align: center;"><font color="#180969"><b>100 , 0674-2543541 , 9437581575</b></font></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><table align="center" border="0" style="background-color:#ffffff;color:#222222;font-family:arial,sans-serif;font-size:small;line-height:15.6px;table-layout:fixed;width:95%;"><tbody><tr style="border-bottom: 1px solid rgb(235, 235, 235);"><th style="word-wrap: normal; height: 26px; padding-right: 10px; color: rgb(0, 0, 0); font-weight: bolder; text-align: center; background-color: rgb(204, 204, 204);"><p class="wb-stl-normal" style="text-align: center;"><strong>Location</strong></p></th><th style="word-wrap: normal; height: 26px; padding-right: 10px; padding-left: 10px; color: rgb(0, 0, 0); font-weight: bolder; text-align: center; background-color: rgb(204, 204, 204);"><p class="wb-stl-normal" style="text-align: center;"><strong>STD Code</strong></p></th><th style="word-wrap: normal; height: 26px; padding-right: 10px; padding-left: 10px; color: rgb(0, 0, 0); font-weight: bolder; text-align: center; background-color: rgb(204, 204, 204);"><p class="wb-stl-normal" style="text-align: center;"><strong>State</strong></p></th></tr><tr style="border-bottom: 1px solid rgb(235, 235, 235);"><th style="word-wrap: normal; height: 26px; padding-right: 10px; text-align: center; background-color: rgb(204, 204, 204);"><p class="wb-stl-normal" style="text-align: center;"><strong>BHUNESHWAR</strong></p></th><th style="word-wrap: normal; height: 26px; padding-right: 10px; padding-left: 10px; text-align: center; background-color: rgb(204, 204, 204);"><p class="wb-stl-normal" style="text-align: center;"><strong>0674</strong></p></th><th style="word-wrap: normal; height: 26px; padding-right: 10px; padding-left: 10px; text-align: center; background-color: rgb(204, 204, 204);"><p class="wb-stl-normal" style="text-align: center;"><strong>ODISHA</strong></p></th></tr></tbody></table><p>&nbsp;</p><table align="center" border="1" cellpadding="2" cellspacing="2" style="width:95%;"><tbody><tr style="border-bottom: 1px solid rgb(235, 235, 235);"><td style="vertical-align: middle; height: 32px; border-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3"><strong>&nbsp;POLICE</strong></h3></td><th style="vertical-align: middle; height: 32px; border-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3"><strong>100</strong></h3></th></tr><tr style="border-bottom: 1px solid rgb(235, 235, 235);"><td style="vertical-align: middle; height: 32px; border-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3"><strong>&nbsp;FIRE STATION</strong></h3></td><th style="vertical-align: middle; height: 32px; border-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3"><strong>101</strong></h3></th></tr><tr><td style="vertical-align: middle; height: 32px; border-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3"><strong>&nbsp;AMBULANCE</strong></h3></td><th style="vertical-align: middle; height: 32px; border-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3"><strong>108</strong></h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;AMBULANCE ( JANANI )</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">102</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;SENIOR CITIZEN HELPLINE</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1090</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;TRAFFIC CONTROL</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1095</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;CHILD HELP LINE</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1098</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;COASTAL HELPLINE</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1093</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;N.H.A.I HELPLINE</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1033</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;WOMEN HELPLINE</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1091 AND 181</h3></th></tr><tr><td style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">&nbsp;ELECTRICITY ISSUE</h3></td><th style="vertical-align: middle; height: 32px;"><h3 class="wb-stl-heading3">1912</h3></th></tr></tbody></table><p>&nbsp;</p><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:95%;"><tbody><tr><td colspan="4" style="background-color: rgb(0, 0, 0);"><h3 class="wb-stl-heading3" style="text-align: center;">&nbsp;</h3><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(255,255,255,1);">HOSPITALS</span></h2><h2 class="wb-stl-heading2">&nbsp;</h2></td></tr><tr><td colspan="3"><p>&nbsp;</p><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">PADMA HOSPITAL</span></p></li></ul></td><td style="width: 200px;"><p class="wb-stl-normal" style="text-align: center;"><br><span class="wb-stl-special">0674-2571386</span></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">CAPITAL&nbsp;HOSPITAL&nbsp;</span></p></li></ul><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MAP - <a data-finalurl="https://www.google.com/maps/place/Capital+Hospital/@20.2600304,85.8210769,17z/data=!3m1!4b1!4m5!3m4!1s0x3a19a7606b4da9c1:0x92908d48ef3b14d4!8m2!3d20.2600254!4d85.8232656" data-name="www.google.com/maps/place/Capital+Hospital/@20.2600304,85.8210769,17z/data=!3m1!4b1!4m5!3m4!1s0x3a19a7606b4da9c1:0x92908d48ef3b14d4!8m2!3d20.2600254!4d85.8232656" href="https://www.google.com/maps/place/Capital+Hospital/@20.2600304,85.8210769,17z/data=!3m1!4b1!4m5!3m4!1s0x3a19a7606b4da9c1:0x92908d48ef3b14d4!8m2!3d20.2600254!4d85.8232656" target="_blank">CLICK HERE</a></span></p></td><td style="width: 200px;"><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2401983,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2400688,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2394602</span></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">E.S.I HOSPITAL&nbsp;(&nbsp;Bhubaneswar )&nbsp;</span></p></li></ul></td><td colspan="3" style="width: 200px;"><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2544647,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2412093</span></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">MUNICIPAL HOSPITAL
</span></p></li></ul></td><td colspan="3" style="width: 200px;"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2591237,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674 2591206</span></p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">KALINGA HOSPITAL (Bhubaneswar)&nbsp;</span></p></li></ul><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MAP - <a data-finalurl="https://maps.google.com/?q=Kalinga%20Hospital,%20NALCO%20Nagar,%20Chandrasekharpur,%20Bhubaneswar,%20Odisha%20751023" data-name="maps.google.com/?q=Kalinga%20Hospital,%20NALCO%20Nagar,%20Chandrasekharpur,%20Bhubaneswar,%20Odisha%20751023" href="https://maps.google.com/?q=Kalinga%20Hospital,%20NALCO%20Nagar,%20Chandrasekharpur,%20Bhubaneswar,%20Odisha%20751023" target="_blank">CLICK HERE</a></span></p><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;WEBSITE - <a data-finalurl="https://www.brlife.com/hospitals/bhubaneshwar/kalinga-hospital-4/" data-name="www.brlife.com/hospitals/bhubaneshwar/kalinga-hospital-4/" href="https://www.brlife.com/hospitals/bhubaneshwar/kalinga-hospital-4/" target="_blank">CLICK HERE</a></span></p></td><td style="width: 200px;"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-6665200,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2300570,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">1800 572 4000</span></p></td></tr><tr><td colspan="3"><p class="wb-stl-normal">&nbsp;</p><ul><li class="wb-stl-normal"><span class="wb-stl-special">SUM HOSPITAL&nbsp; ( Bhuneshwar )&nbsp;</span></li></ul><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MAP : CLICK HERE</span></p></td><td colspan="3" style="width: 200px;"><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-6098855,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2386281</span></p><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p></td></tr><tr><td colspan="3"><p>&nbsp;</p><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">APEX HOSPITAL (&nbsp;Baramunda, Bhubaneswar )</span></p></li></ul></td><td colspan="3" style="text-align: center; width: 200px;"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2562007</span></p></td></tr><tr><td colspan="3"><p class="wb-stl-normal">&nbsp;</p><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">C.D.R HOSPITAL&nbsp;(&nbsp;Bhubaneswar )&nbsp;</span></p></li></ul></td><td colspan="3" style="text-align: center; width: 200px;"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">&nbsp;0674-2420543</span></p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">AYURVEDIC HOSPITAL</span></p></li></ul></td><td colspan="3" style="text-align: center; width: 200px;"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">0674-2432347</span></p></td></tr><tr><td colspan="6" style="background-color: rgb(0, 0, 0);"><p>&nbsp;</p><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(252,252,252,1);">BLOOD BANKS</span></h2><p>&nbsp;</p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DISTRICT&nbsp;HEADQUATERS HOSPITAL ( ANGUL ) :</span></h3></li></ul><h3 class="wb-stl-heading3"><p></p></h3></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">06764-230880</span></p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK SDH ( ATHAMALLIK )</span></h3></li></ul></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">9438683127</span></p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK SDH TALCHER</span></h3></li></ul></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">9439123301</span></p><p class="wb-stl-normal">&nbsp;</p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK D.H.H. BALASORE</span></h3></li></ul></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">9437435843 ,</span></p><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">06782- 241496</span></p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">ODISHA RED CROSS BLOOD BANK ,DHH, BARAGARH</span></h3></li></ul></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">06646-2343140</span></p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH NILAGIRI</span></h3></li></ul></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">06782-233237</span></p></td></tr><tr><td colspan="2"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH PADAMPUR (Bargarh)</span></h3></li></ul></td><td colspan="2"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special">06683-223490</span></p></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK, Bhadrak&nbsp; : 9437293899</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK SDH PATNAGARH&nbsp; 06658-222161</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH BOLANGIR&nbsp; 06652-230646</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK ,SDH, RAIRAKHOL&nbsp; 06644253031</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK&nbsp;,DHH, Sonepur&nbsp; 06654-220150</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK, ROURKELA&nbsp; 0661-2401770</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK ,DHH,SUNDERGARH 06622-273225</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH RAYAGADA&nbsp; 06856-236465</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH PURI&nbsp; 06752-224097</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SUB&nbsp;Divisional Hospital Kuchinda (Sambalpur) :06642-220309</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">V.S.S. Medical Hospital (Sambalpur)&nbsp; 0663-2431420</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">District Head quater&nbsp;Hospital (Sambalpur)&nbsp; 9437085706</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">Municipal Hospital ( Bhubaneswar )&nbsp; 06742591206</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH KORAPUT&nbsp;&nbsp;06852-2251222</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH KHURDA&nbsp; 943728666</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH JEYPORE&nbsp; 06854-233600</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK ( MALKANGIRI )&nbsp; 9439482417</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH BARIPADA 06792-254641</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">Sub-Divisional Hospital Udala,&nbsp;&nbsp;9437366145</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH KARANJIA&nbsp; 06796-221832</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK, SDH ( Rairangpur )&nbsp; 9437408968</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH NABARANGPUR&nbsp; 9437079525</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">RED CROSS BLOOD BANK , Nayagarh&nbsp; 9437089215</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH NUAPADA&nbsp; 9437292867</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH TITILAGARH&nbsp; &nbsp;06655-220318</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH KANTABANJI&nbsp; 06657220464</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH BOUDH&nbsp; 9437495995 , 9937564918</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">CRCBB CUTTACK&nbsp; 06712302258</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SCB MCH (CUTTACK)&nbsp; 9438873459</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH DEOGARH : 9437523046</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">DHH DHENKANAL&nbsp; 06762-221388</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH ANANDAPUR&nbsp;&nbsp;06731-221467 , 220824</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">SDH CHAMPUA&nbsp;&nbsp;9778131312</span></h3></li></ul></td></tr><tr><td colspan="6"><ul><li><h3 class="wb-stl-heading3"><span class="wb-stl-special">CAPITAL&nbsp;HOSPITAL Bhubaneshwar :&nbsp;&nbsp;0674-2394985</span></h3></li></ul></td></tr><tr><td colspan="6" style="background-color: rgb(0, 0, 0);"><h2 class="wb-stl-heading2" style="text-align: center;">&nbsp;</h2><p style="text-align: center;"><strong><span class="wb-stl-special"><span style="color:rgba(252,252,252,1);">TRANSPORT HELPLINE</span></span></strong></p><p>&nbsp;</p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">RAILWAYS GENERAL&nbsp;&nbsp; (ENQUIRY)</span></p></li></ul></td><td colspan="3"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special"><strong>139 , 131</strong></span></p></td></tr><tr><td colspan="3"><ul><li><p class="wb-stl-normal"><span class="wb-stl-special">ODISHA STATE ROAD TRANSPORT CORPORATION (O.S.R.T.C ) TRAVELLERS HELPLINE FOR BUSES&nbsp;</span></p></li></ul></td><td colspan="3"><p class="wb-stl-normal" style="text-align: center;"><span class="wb-stl-special"><strong>1800 345 1122</strong></span></p></td></tr></tbody></table><center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">&nbsp;</center><center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">&nbsp;</center><h3 class="wb-stl-heading3" style="text-align: center;"><strong><u>AMBULANCE HELPLINE</u></strong></h3><p>&nbsp;</p><p style="text-align: center;">&nbsp;</p><ul><li><span class="wb-stl-special">AMBULANCE HELPLINE : 102 , 108&nbsp;</span></li></ul><p class="wb-stl-normal" style="text-align: center;">&nbsp;</p><ul><li class="wb-stl-normal"><p class="wb-stl-normal"><span class="wb-stl-special">SEVA AMBULANCE , CAPITAL HOSPITAL :&nbsp; </span></p></li></ul><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; &nbsp; &nbsp; &nbsp;0674-3091993 ,2413720 ,9437013720</span></p><p class="wb-stl-normal">&nbsp;</p><ul><li class="wb-stl-normal"><p class="wb-stl-normal"><span class="wb-stl-special">MUNICIPALITY HOSPITAL :&nbsp;0674-2415237</span></p></li></ul><p class="wb-stl-normal">&nbsp;</p><ul><li class="wb-stl-normal"><p class="wb-stl-normal"><span class="wb-stl-special">RED CROSS :&nbsp;0674-402005 , 2402389</span></p></li></ul><p class="wb-stl-normal">&nbsp;</p><h3 class="wb-stl-heading3" style="text-align: center;"><strong>OTHER IMPORTANT NUMBERS</strong></h3><center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">&nbsp;</center><table align="center" border="2" cellpadding="5" cellspacing="2" style="width:95%;"><tbody><tr style="border-bottom: 1px solid rgb(235, 235, 235);"><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">&nbsp;AIDS HELPLINE</span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">1097</span></p></th></tr><tr><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">&nbsp;PASSPORT HELPLINE</span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">18002581800</span></p></th></tr><tr><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">&nbsp;EMERGENCY AND RESCUE (PURI)</span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">18002002524</span></p></th></tr><tr><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">&nbsp;TOURIST OFFICER ( PURI )</span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">06752-222664</span></p></th></tr><tr><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">&nbsp;SHRI JAGANNATH TEMPLE</span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p><span class="wb-stl-special">06752-222001</span></p></th></tr><tr><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p>&nbsp;</p><p><span class="wb-stl-special">&nbsp;Bhubaneswar Municipal Corporation</span></p><p>&nbsp;</p><p><span class="wb-stl-special">WEBSITE-&nbsp;<a data-finalurl="https://www.bmc.gov.in/" data-name="www.bmc.gov.in/" href="https://www.bmc.gov.in/" target="_blank">https://www.bmc.gov.in/</a></span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p>&nbsp;</p><p><span class="wb-stl-special">18003450061&nbsp;</span></p><p>&nbsp;</p><p><span class="wb-stl-special">0674-2548295</span></p></th></tr><tr><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><p>&nbsp;</p><p><span class="wb-stl-special">&nbsp;Travellers Helpline for Buses(O.S.R.T.C) </span></p></th><th style="height: 32px; vertical-align: middle; border-color: rgb(0, 0, 0);"><span class="wb-stl-special">18003451122</span></th></tr></tbody></table><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h3 class="wb-stl-heading3" style="text-align: center;"><strong>TOURIST GUIDE&nbsp;</strong></h3><p>&nbsp;</p><h3 class="wb-stl-heading3"><strong>&nbsp; KEY ATTRACTIONS :&nbsp;</strong></h3><p>&nbsp;</p><p class="wb-stl-normal"><strong>&nbsp; </strong><span class="wb-stl-special">1. PURI BEACH&nbsp;</span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; 2. KONARK SUN TEMPLE</span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; 3. JAGANNATH TEMPLE , PURI&nbsp;</span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; 4. LINGARAJ TEMPLE , BHUBANESWAR</span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; 5. NETAJI BIRTH PLACE MUSEUM , CUTTACK</span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span class="wb-stl-special">&nbsp; 6. ROURKELA , ( HERITAGE AND STEEL PLANTS )</span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span style="color:rgba(49,28,201,1);"><span class="wb-stl-special"><b>MAIN DISTRICTS&nbsp;IN ODISHA :&nbsp;</b></span></span></p><p class="wb-stl-normal">&nbsp;</p><p class="wb-stl-normal"><span class="wb-stl-special">1. BHUBANESHWAR</span></p><p class="wb-stl-normal"><span class="wb-stl-special">2. PURI</span></p><p class="wb-stl-normal"><span class="wb-stl-special">3. KEONJHAR</span></p><p class="wb-stl-normal"><span class="wb-stl-special">4. BHADRAK</span></p><p class="wb-stl-normal"><span class="wb-stl-special">5. JHARSUGUDA</span></p><p class="wb-stl-normal"><span class="wb-stl-special">6. ANNGUL</span></p><p class="wb-stl-normal"><span class="wb-stl-special">7. JAGATSINGHPUR</span></p><p class="wb-stl-normal"><span class="wb-stl-special">8. CUTTACK</span></p><p class="wb-stl-normal"><span class="wb-stl-special">9. JAJPUR</span></p><p class="wb-stl-normal"><span class="wb-stl-special">10. SAMBALPUR</span></p><p class="wb-stl-normal"><span class="wb-stl-special">11. ROURKELA</span></p><p class="wb-stl-normal"><span class="wb-stl-special">12. BERHAMPUR</span></p><p class="wb-stl-normal"><span class="wb-stl-special">13. BALASORE</span></p><div id="cke_pastebin" style="position: absolute; top: -285px; width: 1px; height: 623px; overflow: hidden; margin: 0px; padding: 0px; left: -1000px;"><p class="wb-stl-normal" style="text-align: justify;"><span style="color: rgb(0, 0, 0);"><span class="wb-stl-special"><span class="wb-stl-highlight">&nbsp;<br>BLOOD BANKS IN DELHI/NCR</span></span></span></p><p class="wb-stl-normal" style="text-align: justify;">&nbsp;</p><p class="wb-stl-normal" style="text-align: justify;"><span style="color: rgb(0, 0, 0);"><span class="wb-stl-special"><span class="wb-stl-highlight">AIIMS New Delhi 011- 26593726, 26594438<br>Rotary Noida Blood Bank New Delhi 011- 66364887<br>White Cross Blood Bank&nbsp; New Delhi 011- 26831063, 26844140<br>Batra Hospital and Medical Research Centre&nbsp; New Delhi 011- 29958747, 29957487, 29956509, 26053333, 29958447 Extension- 2036, 3089<br>Majeedia Hospital New Delhi 011- &nbsp;64788237, 64788249<br>Apollo Blood Bank New Delhi 011- 26825707, 26925858, 26925801,Extension- 2015<br>Lions Blood Bank&nbsp; New Delhi 011- 42258080, 42258494<br>Sir Ganga Ram Hospital New Delhi&nbsp;011 - 25750000, 25751111, 25861463,Extension- 11870<br>Indian Red Cross Society New Delhi 011 - 23711551&nbsp;</span></span></span></p><p class="wb-stl-normal" style="text-align: justify;">&nbsp;</p><p class="wb-stl-normal" style="text-align: justify;"><span style="color: rgb(0, 0, 0);"><span class="wb-stl-special"><span class="wb-stl-highlight">24 HOUR AMBULANCE IN DELHI</span></span></span></p><p class="wb-stl-normal" style="text-align: justify;">&nbsp;</p><p class="wb-stl-normal" style="text-align: justify;"><span style="color: rgb(0, 0, 0);"><span class="wb-stl-special"><span class="wb-stl-highlight">All India Institute of Medical Sciences (AIIMS) New Delhi 011- 26588776<br>Centralized Accident Trauma Service (CATS)&nbsp; New Delhi 102, 1099<br>Escort Hospital&nbsp; New Delhi 011- 26825000<br>Moolchand Hospital&nbsp; New Delhi 011- 42000000<br>Batra Hospital&nbsp; New Delhi 011- 26083747<br>Rajiv Gandhi Cancer Institute&nbsp; New Delhi 011- 27051011 to 29<br>Sir Ganga Ram Hospital New Delhi 011- 25750000, 25757575<br>Vidyasagar Institute of Mental Health and NeuroSciences (VIMHANS)&nbsp; New Delhi 011- 26924302<br>Max Emergency Ambulance&nbsp; New Delhi 011- 40554055</span></span></span></p></div></div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 class="wb-stl-heading2" style="font-family: 'Times New Roman'; text-align: center;">&nbsp;</h2>
<h2 class="wb-stl-heading2" style="font-family: 'Times New Roman'; text-align: center;">ODISHA IMPORTANT NUMBERS</h2>
<p>&nbsp;</p>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,5,5,1);">&nbsp;&nbsp;</span></p>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>CORONA (COVID 19) HELPLINE:&nbsp;&nbsp;011-23978046 ,&nbsp;1075</strong></span></p>
<p class="wb-stl-normal" style="text-align: center;">&nbsp;</p>

<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>Download Aarogya Setu App For more Information</strong></span></p>

<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong></span></p>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong></span></p>
<span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong></span></p></span>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA COVID HELPLINE : 104 , 9439994859 , </strong></span></p></span></p>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>, 0674-2534177</strong></span></p>
<span style="color:rgba(245,3,23,1);"><strong>, 0674-2534177</strong></span>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>, 0674-2534177</strong></span></p>
<p class="wb-stl-normal" style="text-align: center;">&nbsp;</p>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(245,3,23,1);"><strong>ODISHA HELPLINE FOR LOCAL RESIDENTS&nbsp;STUCK IN OTHER STATES&nbsp;&nbsp;:&nbsp;</strong></span>&nbsp;<strong>0674-2392115 / 9438915986</strong>&nbsp;<strong>( WHATSAPP )&nbsp;</strong></p>
<span style="color:rgba(245,3,23,1);"><strong>ODISHA HELPLINE FOR LOCAL RESIDENTS&nbsp;STUCK IN OTHER STATES&nbsp;&nbsp;:&nbsp;</strong></span>
&nbsp;
<strong>0674-2392115 / 9438915986</strong>
&nbsp;
<strong>( WHATSAPP )&nbsp;</strong><p class="wb-stl-normal" style="text-align: center;">&nbsp; &nbsp;<a data-finalurl="https://www.mohfw.gov.in/" data-name="www.mohfw.gov.in/" href="https://www.mohfw.gov.in/" target="_blank">MINISTRY OF HEALTH AND FAMILY WELFARE&nbsp;</a></p>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script  src="../jss/script.js"></script>
  </body>
</html>
