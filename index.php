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
<?php

echo '<h1>Resplendent Refrain Emblems Calculator (Updated 12.4.18)</h1>';
echo '<h2>Ends in <span id="countdown"></span></h2>';
echo '<button id="info">Usage Instructions</button>';
echo '<p class="info-text">When you start the day. enter the amount of emblems you have in the first 3 fields. As you progress, use the second 3 fields to enter your current number of emblems and see if you\'re hitting your minimum pace for the day.</p>';

echo'<h3>Emblems You Started with Today</h3>';
echo '<label for="bronzeStarting">Bronze</label><input id="bronzeStarting" type="text" value="0" /><br/>';
echo '<label for="silverStarting">Silver</label><input id="silverStarting" type="text" value="0" /><br/>';
echo '<label for="goldStarting">Gold</label><input id="goldStarting" type="text" value="0" /><button id="copy-current">Copy to Current</button><br/>';

echo'<h3>Current Emblem Count</h3>';
echo '<label for="bronzeCurrent">Bronze</label><input id="bronzeCurrent" type="text" value="0" /><br/>';
echo '<label for="silverCurrent">Silver</label><input id="silverCurrent" type="text" value="0" /><br/>';
echo '<label for="goldCurrent">Gold</label><input id="goldCurrent" type="text" value="0" /><br/>';

echo '</br><button id="calculate">Calculate</button>';

echo '<h3>Totals Needed</h3>';
echo '<p class="totals">';
	echo '<span class="bronzeNeededTotal">(Click Calculate)</span> more Bronze<br/>';
		echo '&nbsp;&nbsp;&nbsp;<span class="moreBossBronze"></span> Expert Boss Battles (at 13/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreHostedBeginnerRaidsBronze"></span> Hosted Beginner Raids (at 24/run)</br>&nbsp;&nbsp;&nbsp;<span class="moreJoinedBeginnerRaidsBronze"></span> Joined Beginner Raids (at 16/run)</br><br/>';
	echo '<span class="silverNeededTotal">(Click Calculate)</span> more Silver<br/>';
		echo '&nbsp;&nbsp;&nbsp;<span class="moreHostedStandardRaidsSilver"></span> Hosted Standard Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedStandardRaidsSilver"></span> Joined Standard Raids (at 13/run)<br/><br/>';
	echo '<span class="goldNeededTotal">(Click Calculate)</span> more Gold<br/>';
		echo '&nbsp;&nbsp;&nbsp;<span class="moreHostedExpertRaidsGold"></span> Hosted Expert Raids (at 30/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedExpertRaidsGold"></span> Joined Expert Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreSpecialRaidsGold"></span> Special Raids (at 99/run)';
echo '</p>';

echo '<h3>To Do <span class="timeleft">Today</span></h3>';
echo '<p class="perday"><span class="bronzeNeededToday">(Click Calculate)</span> more Bronze - which is approximately<br/>';
	echo '&nbsp;&nbsp;&nbsp;<span class="moreBossBronze"></span> Expert Boss Battles (at 13/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreHostedBeginnerRaidsBronze"></span> Hosted Beginner Raids (at 24/run)</br>&nbsp;&nbsp;&nbsp;<span class="moreJoinedBeginnerRaidsBronze"></span> Joined Beginner Raids (at 16/run)</p>';
echo '<p class="perday"><span class="silverNeededToday">(Click Calculate)</span> more Silver - which is approximately<br/>';
	echo '&nbsp;&nbsp;&nbsp;<span class="moreHostedStandardRaidsSilver"></span> Hosted Standard Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedStandardRaidsSilver"></span> Joined Standard Raids (at 13/run)</p>';
echo '<p class="perday"><span class="goldNeededToday">(Click Calculate)</span> more Gold - which is approximately</br>';
	echo '&nbsp;&nbsp;&nbsp;<span class="moreHostedExpertRaidsGold"></span> Hosted Expert Raids (at 30/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreJoinedExpertRaidsGold"></span> Joined Expert Raids (at 20/run)<br/>&nbsp;&nbsp;&nbsp;<span class="moreSpecialRaidsGold"></span> Special Raids (at 99/run)</p>';

?>
</body>
