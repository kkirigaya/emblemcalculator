jQuery(document).ready(function($){
	//handle show/hide of instructions
	$('#info').on('click', function(e){
		$('.info-text').slideToggle();
	})

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

	initializeClock('countdown', '12 Dec 2018 05:59:00 GMT');


	var ending = getTimeRemaining('12 Dec 2018 05:59:00 GMT');
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

	$('#copy-current').on('click', function() {
		$('#bronzeCurrent').val($('#bronzeStarting').val());
		$('#silverCurrent').val($('#silverStarting').val());
		$('#goldCurrent').val($('#goldStarting').val());
	});

	$('#calculate').on('click', function(e) {
	 	//bronze numbers
	 	var maxBronze = 1000;
	 	var bronzeStarting = parseInt($('#bronzeStarting').val());
	 	if( isNaN(bronzeStarting) )
			bronzeStarting = 0;
		var bronzeCurrent = parseInt($('#bronzeCurrent').val());
		if( isNaN(bronzeCurrent) )
			bronzeCurrent = 0;
		var bronzeNeeded = maxBronze - bronzeCurrent;
		var bronzeNeededToday = Math.ceil((maxBronze-bronzeStarting)/daysRemaining);
		var remaingingBronzeNeededToday = bronzeNeededToday-(bronzeCurrent-bronzeStarting);

		if( maxBronze-bronzeCurrent < 1 )
			$('.bronzeNeededTotal').html('0');
		else
			$('.bronzeNeededTotal').html(maxBronze-bronzeCurrent);

		if( remaingingBronzeNeededToday < 1 ) {
			$('.bronzeNeededToday').html(0);
			$('.perday .moreBossBronze').html(0);
			$('.perday .moreHostedBeginnerRaidsBronze').html(0);
			$('.perday .moreJoinedBeginnerRaidsBronze').html(0);
		} else {
			$('.bronzeNeededToday').html(remaingingBronzeNeededToday);
			$('.perday .moreBossBronze').html(Math.abs(Math.ceil(remaingingBronzeNeededToday/13)));
			$('.perday .moreHostedBeginnerRaidsBronze').html(Math.abs(Math.ceil(remaingingBronzeNeededToday/24)));
			$('.perday .moreJoinedBeginnerRaidsBronze').html(Math.abs(Math.ceil(remaingingBronzeNeededToday/16)));
		}
		$('.totals .moreBossBronze').html(Math.abs(Math.ceil((maxBronze-bronzeCurrent)/13)));
		$('.totals .moreHostedBeginnerRaidsBronze').html(Math.abs(Math.ceil((maxBronze-bronzeCurrent)/24)));
		$('.totals .moreJoinedBeginnerRaidsBronze').html(Math.abs(Math.ceil((maxBronze-bronzeCurrent)/16)));

		//silver numbers
		var maxSilver = 1000;
	 	var silverStarting =  parseInt($('#silverStarting').val());
	 	if( isNaN(silverStarting) )
			silverStarting = 0;
		var silverCurrent =  parseInt($('#silverCurrent').val());
		if( isNaN(silverCurrent) )
			silverCurrent = 0;
		var silverNeeded = maxSilver - silverCurrent;
		var silverNeededToday = Math.ceil((maxSilver-silverStarting)/daysRemaining);
		var remaingingSilverNeededToday = silverNeededToday-(silverCurrent-silverStarting);

		if( maxSilver-silverCurrent < 1 )
			$('.silverNeededTotal').html('0');
		else
			$('.silverNeededTotal').html(maxSilver-silverCurrent);

		if( remaingingSilverNeededToday < 1 ) {
			$('.perday .silverNeededToday').html(0);
			$('.perday .moreHostedStandardRaidsSilver').html(0);
			$('.perday .moreJoinedStandardRaidsSilver').html(0);
		} else {
			$('.perday .silverNeededToday').html(remaingingSilverNeededToday);
			$('.perday .moreHostedStandardRaidsSilver').html(Math.abs(Math.ceil(remaingingSilverNeededToday/20)));
			$('.perday .moreJoinedStandardRaidsSilver').html(Math.abs(Math.ceil(remaingingSilverNeededToday/13)));
		}
		$('.totals .moreHostedStandardRaidsSilver').html(Math.abs(Math.ceil((maxSilver-silverCurrent)/20)));
		$('.totals .moreJoinedStandardRaidsSilver').html(Math.abs(Math.ceil((maxSilver-silverCurrent)/13)));

		//gold numbers
		var maxGold = 4500;
	 	var goldStarting = parseInt($('#goldStarting').val());
	 	if( isNaN(goldStarting) )
			goldStarting = 0;
		var goldCurrent =  parseInt($('#goldCurrent').val());
		if( isNaN(goldCurrent) )
			goldCurrent = 0;
		var goldNeeded = maxGold - goldCurrent;
		var goldNeededToday = Math.ceil((maxGold-goldStarting)/daysRemaining);
		var remaingingGoldNeededToday = goldNeededToday-(goldCurrent-goldStarting);

		if( maxGold-goldCurrent < 1 )
			$('.goldNeededTotal').html('0');
		else
			$('.goldNeededTotal').html(maxGold-goldCurrent);

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
		$('.totals .moreHostedExpertRaidsGold').html(Math.abs(Math.ceil((maxGold-goldCurrent)/30)));
		$('.totals .moreJoinedExpertRaidsGold').html(Math.abs(Math.ceil((maxGold-goldCurrent)/20)));
		$('.totals .moreSpecialRaidsGold').html(Math.abs(Math.ceil((maxGold-goldCurrent)/99)));
	});

	$('#calculate').click();
});