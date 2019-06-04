<html>
<head>
	<meta name="viewport" content="width=device-width">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="/emblemcalculator/calc.js"></script>
	<link rel="stylesheet" type="text/css" href="/emblemcalculator/style.css"></style>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-5541692-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
	<h1>Resplendent Refrain Emblems Calculator (Updated 12.4.18)</h1>
	<h2>Ends in <span id="countdown"></span></h2>
	<button id="info">Usage Instructions</button>
	<p class="info-text">When you start the day. enter the amount of emblems you have in the first 3 fields. As you progress, use the second 3 fields to enter your current number of emblems and see if you're hitting your minimum pace for the day.
	<br/><br/>
	This calclator assumes you want to earn all of the emblem rewards. It's worth considering if you actually want that, especially in regards to the rewards for the last 1500 gold emblems. It's a long grind that may not be worth the time/stamina/wings for you!
	<br/><br/>
	If you'd like to use your own target emblem amounts, use the "set my own emblem goals" button below.</p>
	<br/><br/>
	<button id="custom-goals">Set My Own Emblem Goals</button>
	<div class="custom-goals-wrap">
		<h3>Custom Emblem Goals</h3>
		<label for="customBronze">Bronze</label><input id="customBronze" type="text" value="1000" /><br/>
		<label for="customSilver">Silver</label><input id="customSilver" type="text" value="1000" /><br/>
		<label for="customGold">Gold</label><input id="customGold" type="text" value="4500" /><br/>
	</div>

	<h3>Emblems You Started with Today</h3>
	<label for="bronzeStarting">Bronze</label><input id="bronzeStarting" type="text" value="0" /><br/>
	<label for="silverStarting">Silver</label><input id="silverStarting" type="text" value="0" /><br/>
	<label for="goldStarting">Gold</label><input id="goldStarting" type="text" value="0" /><button id="copy-current">Copy to Current</button><br/>

	<h3>Current Emblem Count</h3>
	<label for="bronzeCurrent">Bronze</label><input id="bronzeCurrent" type="text" value="0" /><br/>
	<label for="silverCurrent">Silver</label><input id="silverCurrent" type="text" value="0" /><br/>
	<label for="goldCurrent">Gold</label><input id="goldCurrent" type="text" value="0" /><br/>

	</br><button id="calculate">Calculate</button>

	<h3>Totals Needed</h3>
	<p class="totals">
		<span class="bronzeNeededTotal">(Click Calculate)</span> more Bronze<br/>
			&nbsp;&nbsp;&nbsp;<span class="moreBossBronze"></span> Expert Boss Battles (at 13/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreHostedBeginnerRaidsBronze"></span> Hosted Beginner Raids (at 24/run)</br>&nbsp;&nbsp;&nbsp;<span class="moreJoinedBeginnerRaidsBronze"></span> Joined Beginner Raids (at 16/run)</br><br/>
		<span class="silverNeededTotal">(Click Calculate)</span> more Silver<br/>
			&nbsp;&nbsp;&nbsp;<span class="moreHostedStandardRaidsSilver"></span> Hosted Standard Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedStandardRaidsSilver"></span> Joined Standard Raids (at 13/run)<br/><br/>
		<span class="goldNeededTotal">(Click Calculate)</span> more Gold<br/>
			&nbsp;&nbsp;&nbsp;<span class="moreHostedExpertRaidsGold"></span> Hosted Expert Raids (at 30/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedExpertRaidsGold"></span> Joined Expert Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreSpecialRaidsGold"></span> Special Raids (at 99/run)
	</p>

	<h3>To Do <span class="timeleft">Today</span></h3>
	<p class="perday"><span class="bronzeNeededToday">(Click Calculate)</span> more Bronze - which is approximately<br/>
		&nbsp;&nbsp;&nbsp;<span class="moreBossBronze"></span> Expert Boss Battles (at 13/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreHostedBeginnerRaidsBronze"></span> Hosted Beginner Raids (at 24/run)</br>&nbsp;&nbsp;&nbsp;<span class="moreJoinedBeginnerRaidsBronze"></span> Joined Beginner Raids (at 16/run)</p>
	<p class="perday"><span class="silverNeededToday">(Click Calculate)</span> more Silver - which is approximately<br/>
		&nbsp;&nbsp;&nbsp;<span class="moreHostedStandardRaidsSilver"></span> Hosted Standard Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedStandardRaidsSilver"></span> Joined Standard Raids (at 13/run)</p>
	<p class="perday"><span class="goldNeededToday">(Click Calculate)</span> more Gold - which is approximately</br>
		&nbsp;&nbsp;&nbsp;<span class="moreHostedExpertRaidsGold"></span> Hosted Expert Raids (at 30/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedExpertRaidsGold"></span> Joined Expert Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreSpecialRaidsGold"></span> Special Raids (at 99/run)</p>
</body>
