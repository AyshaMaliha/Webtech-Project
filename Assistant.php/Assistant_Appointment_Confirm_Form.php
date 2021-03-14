<?php
   $time="";
   $err_time="";
   $zone="";
   $err_zone="";
   $room="";
   $err_room="";
   $floor="";
   $err_floor="";
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		 
		if(empty($_POST["time"]))
         {
             $err_number="[Number Requires]";
         }
         elseif(!is_numeric($_POST["time"]))
         {
             $err_number="[Time should only contain neumeric value]";
         }
         else
         {
             $number=htmlspecialchars($_POST["time"]);
         }
		
		
		if(empty($_POST["room"]))
         {
             $err_number="[Number Requires]";
         }
         elseif(!is_numeric($_POST["room"]))
         {
             $err_number="[Room number should only contain neumeric value]";
         }
		 elseif(strlen($_POST["room"])<3)
		 {
			 $err_uname="[Room number must be 6 digit long]";
		 }
         else
         {
             $number=htmlspecialchars($_POST["room"]);
         }
		
		if(empty($_POST["floor"]))
         {
             $err_number="[Floor Requires]";
         }
         elseif(!is_numeric($_POST["floor"]))
         {
             $err_number="[number should only contain neumeric value]";
         }
         else
         {
             $number=htmlspecialchars($_POST["floor"]);
         }
		
		
		
		echo "Time: ". $_POST["time"]."<br>";
		echo "Room No: ". $_POST["room"]."<br>";
		echo "Floor: ". $_POST["floor"]."<br>";
		
		
		
	}
   

?>
<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		<form action="" method="post">
		
			<center><h1>Apointment Request</h1></center>
			<h4 style="text-align:left;">Patient Name: Fahim Mahtab Ifsan</h4>
			<h4 style="text-align:left;">Patient ID: 3046</h4>
			<h4 style="text-align:left;">Doctor's Name: Dr. Farzana Sohael</h4>
			<h4 style="text-align:left;">Department: Gynocology</h4>
			<h4 style="text-align:left;">Day: Sunday</h4>
			<table>
			    <tr>
					<td><span><b>Time</b>:</span></td>
					<td><input type="text" name="time" value = "<?php echo $time;?>"><select name="zone"><br>
                            <option disabled selected>Zone</option>
                            <?php 
                                $zone=array("1"=>"AM", "2"=>"PM");
                                foreach($zone as $x => $x_value) {
                                    echo "<option>$x. $x_value<option>";
                                    
                                  }
                            ?>
                        </select>
					<td><span><?php echo $err_time; $err_zone?></span></td>
				</tr>
				<tr>
				    <td><span><b>Room No</b>:</span></td>
					<td><input type="text" name="room" value = "<?php echo $room;?>"><br>
					<td><span><?php echo $err_room;?></span></td>
			    </tr>
				<tr>
				    <td><span><b>Floor</b>:</span></td>
					<td><input type="text" name="floor" value = "<?php echo $floor;?>"><br>
					<td><span><?php echo $err_floor;?></span></td>
			    </tr>
			</table>
				
				
				
				
			
			
			<a href="Assistant_Home_Form.php"><button align="center"  style="height: 60px; width: 250px";><b><h2>Confirm</h2></b></button></a>
	
		</form>
		</fieldset>	
		</body>
</html>