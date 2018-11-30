<html>
<head>
	<meta name="viewport" content="width=device-width">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="/emblemcalculator/calc.js"></script>
	<link rel="stylesheet" type="text/css" href="/emblemcalculator/style.css"></style>
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

echo '<h1>Resplendent Refrain Emblems Calculator</h1>';
echo '<h2>Ends in <span id="countdown"></span></h2>';

echo'<h3>Enter your total emblems here</h3>';
echo '<label for="bronzeTotal">Total Bronze</label><input id="bronzeTotal" type="text" value="0" /><br/>';
echo '<label for="silverTotal">Total Silver</label><input id="silverTotal" type="text" value="0" /><br/>';
echo '<label for="goldTotal">Total Gold</label><input id="goldTotal" type="text" value="0" /><br/>';

echo'<h3>Enter your emblems earned today here</h3>';
echo '<label for="bronzeToday">Bronze</label><input id="bronzeToday" type="text" value="0" /><br/>';
echo '<label for="silverToday">Silver</label><input id="silverToday" type="text" value="0" /><br/>';
echo '<label for="goldToday">Gold</label><input id="goldToday" type="text" value="0" /><br/>';

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
