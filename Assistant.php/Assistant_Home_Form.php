<?php

?>
<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		
		<img align="left" src="IMG_20210313_154907.jpg" alt="" height="300px" width="250px">
			<center><h1>Noor A Aysha</h1></center>
			<center> <h2>ID:4202</h2>
			<center> <h2>Assistant of Dr. Farzana Sohael</h2>
			<center> <h2>Popular Diagnostic Centre,Dhaka</h2><br>
			<br>
			<br><br><br>
			
			
			
			
			     <h4 style="text-align:left;"><a href="Assistant_Account.php">Edit Profile</a></h5>
			     <h5 style="text-align:left;"><a href="Assistant_Chat.php">Chat</a></h5><h5 style="text-align:left;"><a href="Assistant_Notification.php">Notification</a></h5>
				 
				 <h1>Appointment</h1>
				 
		
			
				<a href="?day=sun"><button  style="height: 50px; width: 50px"><b><h3>SUN</h3></b> </button>
				<a href="?day=mon"><button  style="height: 50px; width: 50px"><b><h3>MON</h3></b> </button>
				<a href="?day=tue"><button  style="height: 50px; width: 50px"><b><h3>TUE</h3></b></button>
				<a href="?day=wed"><button  style="height: 50px; width: 50px"><b><h3>WED</h3></b></button>
				<a href="?day=thu"><button  style="height: 50px; width: 50px"><b><h3>THU</h3></b> </button>
				<a href="?day=fri"><button  style="height: 50px; width: 50px"><b><h3>FRI</h3></b> </button>
				<a href="?day=sat"><button  style="height: 50px; width: 50px"><b><h3>SAT</h3></b></button></a><br>
				
				<br>
				<?php if(isset($_GET['day'])){ ?>
				<table border="1" cellpadding="5">
				<tr>
				<td>
				<?php 
				if($_GET['day']=="sun"){
					echo "Sun";
				}
				if($_GET['day']=="mon"){
					echo "Mon";
				}
				if($_GET['day']=="tue"){
					echo "TUE";
				}
				if($_GET['day']=="wed"){
					echo "Wed";
				}
				if($_GET['day']=="thu"){
					echo "Thu";
				}
				if($_GET['day']=="fri"){
					echo "Fri";
				}
				if($_GET['day']=="sat"){
					echo "Sat";
				}
				?>
				</td>
				</tr>
				</table>
				<?php } ?>
			
			<a href="Assistant_Appointment_Request_List_Form.php" target="_blank"><button align="left" style="height: 100px; width: 250px";><b><h2>Appointment Request</h2></b></button></a>
			<button align="right" onclick="document.location='Login.php'" style="height: 100px; width: 250px";><b><h2>Log Out</h2></b></button>
	
		
		</fieldset>	
		</body>
</html>
