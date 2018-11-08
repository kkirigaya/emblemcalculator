jQuery(document).ready(function($){
	function getTimeRemaining(endtime){
	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor( (t/1000) % 60 );
	  var minutes = Math.floor( (t/1000/60) % 60 );
	  var hours = Math.floor( (t/(1000*60*60)) % 24 );
	  var days = Math.floor( t/(1000*60*60*24) );
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	}

	function initializeClock(id, endtime){
	  var clock = document.getElementById(id);
	  var timeinterval = setInterval(function(){
	    var t = getTimeRemaining(endtime);
	    clock.innerHTML = t.days + ' days, ' +
	                      t.hours + ' hours, ' +
	                      t.minutes + ' minutes, ' +
	                      t.seconds + ' seconds';
	    if(t.total<=0){
	      clearInterval(timeinterval);
	    }
	  },1000);
	}

	initializeClock('countdown', '12 Nov 2018 05:59:00 GMT');


	var ending = getTimeRemaining('12 Nov 2018 05:59:00 GMT');
	var daysRemaining = ending['days'];
	if( daysRemaining < 1 ) {
		if( ending['hours'] < 1 ) {
			if( ending['minutes'] < 1 ) {
				if( ending['seconds'] < 1 ) {
					$('body').html('<h1>Event Ended. See you next time.</h1>');
				} else {
					daysRemaining = 1;
					$('.timeleft').html('In the Next Minute!');
				}
			} else {
				daysRemaining = ending['minutes'];
				$('.timeleft').html('Per Minute');
			}
		} else {
			daysRemaining = ending['hours'];
			$('.timeleft').html('Per Hour');
		}
	}

	$('#calculate').on('click', function(e) {
	 	//bronze numbers
	 	var maxBronze = 1000;
	 	var bronzeTotal = parseInt($('#bronzeTotal').val());
	 	if( isNaN(bronzeTotal) )
			bronzeTotal = 0;
		var bronzeToday = parseInt($('#bronzeToday').val());
		if( isNaN(bronzeToday) )
			bronzeToday = 0;
		var bronzeNeeded = maxBronze - (bronzeTotal+bronzeToday);
		var bronzeNeededToday = Math.ceil((maxBronze-bronzeTotal)/daysRemaining);
		var remaingingBronzeNeededToday = bronzeNeededToday-bronzeToday;
		if( maxBronze-bronzeTotal-bronzeToday < 1 )
			$('.bronzeNeededTotal').html('0');
		else
			$('.bronzeNeededTotal').html(maxBronze-bronzeTotal-bronzeToday);

		if( remaingingBronzeNeededToday < 1 ) {
			$('.bronzeNeededToday').html(0);
			$('.perday .moreSentinelsBronze').html(0);
			$('.perday .moreHostedBeginnerRaidsBronze').html(0);
			$('.perday .moreJoinedBeginnerRaidsBronze').html(0);
		} else {
			$('.bronzeNeededToday').html(remaingingBronzeNeededToday);
			$('.perday .moreSentinelsBronze').html(Math.abs(Math.ceil(remaingingBronzeNeededToday/13)));
			$('.perday .moreHostedBeginnerRaidsBronze').html(Math.abs(Math.ceil(remaingingBronzeNeededToday/24)));
			$('.perday .moreJoinedBeginnerRaidsBronze').html(Math.abs(Math.ceil(remaingingBronzeNeededToday/16)));
		}
		$('.totals .moreSentinelsBronze').html(Math.abs(Math.ceil((maxBronze-bronzeTotal-bronzeToday)/13)));
		$('.totals .moreHostedBeginnerRaidsBronze').html(Math.abs(Math.ceil((maxBronze-bronzeTotal-bronzeToday)/24)));
		$('.totals .moreJoinedBeginnerRaidsBronze').html(Math.abs(Math.ceil((maxBronze-bronzeTotal-bronzeToday)/16)));

		//silver numbers
		var maxSilver = 1000;
	 	var silverTotal =  parseInt($('#silverTotal').val());
	 	if( isNaN(silverTotal) )
			silverTotal = 0;
		var silverToday =  parseInt($('#silverToday').val());
		if( isNaN(silverToday) )
			silverToday = 0;
		var silverNeeded = maxSilver - (silverTotal+silverToday);
		var silverNeededToday = Math.ceil((maxSilver-silverTotal)/daysRemaining);
		var remaingingSilverNeededToday = silverNeededToday-silverToday;

		if( maxSilver-silverTotal-silverToday < 1 )
			$('.silverNeededTotal').html('0');
		else
			$('.silverNeededTotal').html(maxSilver-silverTotal-silverToday);

		if( remaingingSilverNeededToday < 1 ) {
			$('.perday .silverNeededToday').html(0);
			$('.perday .moreHostedStandardRaidsSilver').html(0);
			$('.perday .moreJoinedStandardRaidsSilver').html(0);
		} else {
			$('.perday .silverNeededToday').html(remaingingSilverNeededToday);
			$('.perday .moreHostedStandardRaidsSilver').html(Math.abs(Math.ceil(remaingingSilverNeededToday/20)));
			$('.perday .moreJoinedStandardRaidsSilver').html(Math.abs(Math.ceil(remaingingSilverNeededToday/13)));
		}
		$('.totals .moreHostedStandardRaidsSilver').html(Math.abs(Math.ceil((maxSilver-silverTotal-silverToday)/20)));
		$('.totals .moreJoinedStandardRaidsSilver').html(Math.abs(Math.ceil((maxSilver-silverTotal-silverToday)/13)));

		//gold numbers
		var maxGold = 3000;
	 	var goldTotal = parseInt($('#goldTotal').val());
	 	if( isNaN(goldTotal) )
			goldTotal = 0;
		var goldToday =  parseInt($('#goldToday').val());
		if( isNaN(goldToday) )
			goldToday = 0;
		var goldNeeded = maxGold - (goldTotal+goldToday);
		var goldNeededToday = Math.ceil((maxGold-goldTotal)/daysRemaining);
		var remaingingGoldNeededToday = goldNeededToday-goldToday;
		if( maxGold-goldTotal-goldToday < 1 )
			$('.goldNeededTotal').html('0');
		else
			$('.goldNeededTotal').html(maxGold-goldTotal-goldToday);

		if( remaingingGoldNeededToday < 1 ) {
			$('.perday .goldNeededToday').html(0);
			$('.perday .moreHostedExpertRaidsGold').html(0);
			$('.perday .moreJoinedExpertRaidsGold').html(0);
			$('.perday .moreSpecialRaidsGold').html(0);
		} else {
			$('.perday .goldNeededToday').html(remaingingGoldNeededToday);
			$('.perday .moreHostedExpertRaidsGold').html(Math.abs(Math.ceil(remaingingGoldNeededToday/30)));
			$('.perday .moreJoinedExpertRaidsGold').html(Math.abs(Math.ceil(remaingingGoldNeededToday/20)));
			$('.perday .moreSpecialRaidsGold').html(Math.abs(Math.ceil(remaingingGoldNeededToday/99)));
		}
		$('.totals .moreHostedExpertRaidsGold').html(Math.abs(Math.ceil((maxGold-goldTotal-goldToday)/30)));
		$('.totals .moreJoinedExpertRaidsGold').html(Math.abs(Math.ceil((maxGold-goldTotal-goldToday)/20)));
		$('.totals .moreSpecialRaidsGold').html(Math.abs(Math.ceil((maxGold-goldTotal-goldToday)/99)));
	});

	$('#calculate').click();
});