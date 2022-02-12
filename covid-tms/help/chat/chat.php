<!DOCTYPE html>
<html lang="en">
<head>
	<title>COVID-19 Management System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/jquery.convform.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="demo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<section id="demo">
	<center><img src="https://media.giphy.com/media/Vf2pIg36dt0Vlv6oOu/giphy.gif" alt=""width="180px" height="80px"></center>
		<img src="https://media.giphy.com/media/led813Pb53xKKnyycG/giphy.gif" alt="" width="400px" height="400px">
	
	    <div class="vertical-align">
		
			
	        <div class="container">


				
				<div class="chat-popup">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
	                            <form action="" method="GET" class="hidden">
	                                <select data-conv-question="Hello! I'm a BKKK bot .I hope you are following our COVID-19 guideline " name="first-question">
	                                    <option value="yes">Yes</option>
	                                    <option value="sure">Sure!</option>
	                                </select>
	                                <input type="text" name="name" data-conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
	                                <input type="text" data-conv-question="Hii, {name}:0! It's a pleasure to meet you." data-no-answer="true">
	                                <input type="text" data-conv-question="Please give me following answer to check your health." data-no-answer="true">
	                               
									
									<select name="multi[]" data-conv-question="What kind of Symptoms do you like?" multiple>
	                                    <option value="cold & fever">Cold & Fever</option>
	                                    <option value="difficult in breath">Difficult in breath</option>
	                                    <option value="dry cough">Dry Cough</option>
	                                    <option value="body pain">Body Pain</option>
	                                </select>
	                                <select name="programmer" data-callback="storeState" data-conv-question="Don't Worry about it bcoz if you are in proper treatment then u can recovery ">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">NO</option>
	                                </select>
	                                <div data-conv-fork="programmer">
	                                    <div data-conv-case="yes">
	                                        <input type="text" data-conv-question="GOOD! I wish ,you will recovery soon...." data-no-answer="true">
	                                    </div>
	                                    <div data-conv-case="no">
		                                    <select name="thought" data-conv-question="No, why..? How you will recovery from COVID-19. please Co-operated with us">
		                                    	<option value="yes">Yes</option>
		                                    	<option value="no">Sure..</option>
		                                    </select>
	                                    </div>
	                                </div>
	                                <input type="text" data-conv-question="Then provide your details" data-no-answer="true">
	                                <input data-conv-question="Type in your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
	                                <input data-conv-question="Now tell me a secret (like a password)" type="password" data-minlength="6" id="senha" name="password" required placeholder="password">
									<select data-conv-question="All the details regrading covid-19 send to ur email, please check it and forther u need more information then choose one : ">
											<option value="https://www.mygov.in/covid-19" data-callback="https://www.mygov.in/covid-19">Google</option>
											<option value="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19" data-callback="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19">Bing</option>
									</select>
	                                <select name="callbackTest" data-callback="storeState" data-conv-question="Are you vaccinated or not ?? ">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">No</option>
	                                </select>
									<div data-conv-fork="callbacktest">
	                                    <div data-conv-case="yes">
	                                        <input type="text" data-conv-question="GOOD...! & told to other to go for vaccination" data-no-answer="true">
	                                    </div>
	                                    <div data-conv-case="no">
		                                    <select name="thought" data-conv-question="Still you are not vaccinated....Hurry up Bro! Protect yourself and others - Get vaccinated">
		                                    	<option value="yes">Yes</option>
		                                    	<option value="no">Sure..</option>
		                                    </select>
	                                    </div>
										</div>
	                                <select data-conv-question="Let's Stay Safe & Fight Together Against CORONA Virus ." id="">
	                                    <option value="">Awesome!</option>
	                                </select>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		</div>
	</section>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="dist/autosize.min.js"></script>
	<script type="text/javascript" src="dist/jquery.convform.js"></script>

	<script>
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>
	  <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
	  <script src="main.js"></script>
	  
</body>
</html>