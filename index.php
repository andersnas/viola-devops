<HTML>
	<head>
		<style>
		<?php
		function random_color_part() {
		    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
		}
		function random_color() {
		    return random_color_part() . random_color_part() . random_color_part();
		}
		?>
		.time {
		    text-align: center;
		    border: 3px solid #0000FF;
		    font-family: Arial, Helvetica, sans-serif;
		    font-size: 10vw;
		    font-weight: bold;
		    background-color:DodgerBlue;
		    color:White;

		}
		.countdown {
		    text-align: center;
		    border: 3px solid #0000FF;
		    font-family: Arial, Helvetica, sans-serif;
		    font-size: 2vw;
		    font-weight: bold;
		    background-color: #<?php echo random_color(); ?>;
		    color:White;
		}
		</style>
	</head>
	<BODY style=background-color:Black;>
		<div id=clock class=time>
			<?php
			$date = new DateTime("now", new DateTimeZone('Europe/Stockholm') );
			echo $date->format('Y-m-d H:i:s');
			?>
		</div>
		<div id=counter class=countdown>
			Content refreshed in <span id="countdowntimer">5 </span> Seconds
		</div>
		<script type="text/javascript">
		    var timeleft = 5;
		    var downloadTimer = setInterval(function(){
		    timeleft--;
		    document.getElementById("countdowntimer").textContent = timeleft;
		    if(timeleft <= 0)
		        clearInterval(downloadTimer);
		    if(timeleft == 0)
    			location.reload();
    	    },1000);
		</script>
	</BODY>
</HTML>
