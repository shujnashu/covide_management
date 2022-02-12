<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>COVID-19 management system</title>
  <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
  

<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

<link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/78060/animate.min.css" rel="stylesheet" type="text/css">

<div class="thnx">
<img src="https://media.giphy.com/media/tOWDuooJwT48naLK9Q/giphy.gif" width="300px" height="150px"   alt="">
</div>
<div class="donate">
<button>Donate</button>
<form name="donAmount" id="donAmount">
  <input type="radio" value="100" name="amount" id="three">
  <label for="three">Rs.100</label>
  <input type="radio" value="1000" name="amount" id="twentyfive">
  <label for="twentyfive">Rs.1000</label>
  <input type="radio" value="10,000" name="amount" id="hundred">
  <label for="hundred">Rs.10,000</label>
  <input type="radio" value="other" name="amount" id="other">
  <label for="other">Other</label>
</form>
</div>

<div id="custom">
  <h2>Donation Amount</h2>
  <form name="customDonation" id="customDonation">
  <div class="input-group-1">
    <label for="custom-amount">&#8377; </label>
    <input id="custom-amount" name="custom-amount" type="text">
    <div class="warn"></div>
  </div>
  </form>
  <div class="clearfix">
    <button class="back" type="button">Back
      <span></span>
      <span></span>
      <span></span>
    </button>
    <button class="next" type="button">Next</button>
  </div>
</div>

<section id="details">
  <div class="contact-info">
  <h2>Basic Information</h2>
  <form class="clearfix">
    <div class="input-group-2">
    <label>First Name</label>
    <input type="text">
    </div>
    <div class="input-group-2">
    <label>Last Name</label>
    <input type="text">
    </div>
    <div class="input-group-1">
    <label>Email Address</label>
    <input type="text">
    </div>
    <hr>
    <div class="input-group-1">
    <label>Street Address</label>
    <input type="text">
    </div>
    <div class="input-group-3">
    <label>City</label>
    <input type="text">
    </div>
    <div class="input-group-3">
    <label>State</label>
    <input type="text">
    </div>
    <div class="input-group-3">
    <label>Zip Code</label>
    <input type="text">
    </div>
  </form>
  <div class="clearfix">
    <button class="back" type="button">Back
      <span></span>
      <span></span>
      <span></span>
    </button>
    <button class="next" type="button">Next</button>
  </div>
  </div>
</section>

<section id="card">
    <div class="contact-info">
  <h2>Payment Information</h2>
  <form class="clearfix">
    <div class="input-group-1">
    <label>Card Number</label>
    <input type="text">
    </div>
    <div class="clearfix">
    <div class="input-group-2">
    <label>Expiration Date</label>
    <input type="text">
    </div>
    
    <div class="input-group-2">
    <label>Security Code (CVV)</label>
    <input type="text">
    </div>
    </div>
    <hr>
    <div class="input-group-1">
    <label>Employer</label>
    <input type="text">
    </div>
    
    <div class="input-group-1">
    <label>Occupation</label>
    <input type="text">
    </div>
  </form>
  <div class="clearfix">
    <button class="back" type="button">Back
      <span></span>
      <span></span>
      <span></span>
    </button>
    <button class="next" type="button">Review</button>
  </div>
  </div>
</section>

<section class="processing">
<div class="check">
  <span></span>
  <div class="mask">
  </div>
  <span></span>
</div>

<div class="outer">
  <div class="inner">
  </div>
  <div class="progress">
  </div>
</div>
<span class="message">Processing</span>
</section>

<section id="check">
  <h2>Confirm Payment</h2>
  <p>Please confirm your contribution of</p>
  <span>Rs.</span>
  <button class="next" type="button">Confirm</button>
</section>

<section id="confirm">
  <h2>Thank You!</h2>
  <p>Your <span class="amount">Rs.</span> donation will help us to fight against CORONA ....!</p>
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="script.js"></script>

</body>
</html>
