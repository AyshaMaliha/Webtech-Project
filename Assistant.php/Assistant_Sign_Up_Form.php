<?php
	$name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$pcode="";
	$number="";
	$err_number="";
	$dname="";
	$err_dname="";
	$hname="";
	$err_hname="";
	$bdate="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$about="";
	$err_about="";
	$bio = "";
	$err_bio="";
	$err_birthday="";
	$birthday="";
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
        elseif(strlen($_POST["pass"])<8)
        {
             $err_pass="[password must be at least 8 characters long]";
        }
		elseif(strpos($_POST["pass"]," "))
        {
                $err_pass="[Password should not contain white space]";
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?"))
        {
                $err_pass="[Password should contain at least one special character]";
        }
        else
		{
            $u=0; $l=0; $d=0;
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_upper($_POST["pass"][$i]))
                {
                    $u=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_lower($_POST["pass"][$i]))
                {
                    $l=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_digit($_POST["pass"][$i]))
                {
                    $d=1;
                    break;
                }
            }
            if(!$u==1 || !$l==1 || !$d==1)
            {
                $err_pass="[must have at least one upper case, one lower case & one numeric value]";
            }
            else
            {
                $pass=htmlspecialchars($_POST["pass"]);
                if($_POST["pass"]==$_POST["conpass"])
                {
                    $confirm_pass=$_POST["pass"];
                }
                elseif(empty($_POST["confpass"]))
                {
                    $err_confirm_pass="[Please re-insert password]";
                }
                else
                {
                    $err_confirm_pass="[pasword does not match]";
                }
            }
		}
		if(empty($_POST["email"]))
        {
            $err_email="[email required]";
        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
             
         }
		if(empty($_POST["number"]))
         {
             $err_number="[Number Requires]";
         }
         elseif(!is_numeric($_POST["number"]))
         {
             $err_number="[number should only contain neumeric value]";
         }
         else
         {
             $number=htmlspecialchars($_POST["number"]);
         }
		
		if(empty($_POST["dname"]))
		{
			$err_name = "Name Required";
		}
		
		elseif(htmlspecialchars($_POST["dname"]))
		 {
			 $err_name="HTML KeyWords Used";
		 }

		 else 
		 {
			 $name="No keywords used";
			 $name=$_POST["dname"];
		 }
		 if(empty($_POST["hname"]))
		{
			$err_name = "Name Required";
		}
		
		elseif(htmlspecialchars($_POST["hname"]))
		 {
			 $err_name="HTML KeyWords Used";
		 }

		 else 
		 {
			 $name="No keywords used";
			 $name=$_POST["hname"];
		 }
		if(empty($_POST["s_add"]))
		{
			$err_s_add = "Street Required";
		}
		else
		{
			$s_add = $_POST["s_add"];
		}
		if(empty($_POST["city"]))
		{
			$err_city = "City Required";
		}
		else
		{
			$city = $_POST["city"];
		}
		if(empty($_POST["state"]))
		{
			$err_state = "State Required";
		}
		else
		{
			$state = $_POST["state"];
		}
		if(empty($_POST["zip"]))
		{
			$err_zip = "Zip/Postal Code Required";
		}
		else
		{
			$zip = $_POST["zip"];
		}
		if(empty($_POST["bio"]))
		{
			$err_bio = "Bio Required";
		}
		else
		{
			$bio = $_POST["bio"];
		}
		
		 
		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
		} 
		else
		{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["about"]))
		{ 
			$err_about = "No buttons were checked."; 
		} 
		else
		{
			$about = $_POST["about"];
		}
		
		if(!isset($_POST['day']) || !isset($_POST['month']) || !isset($_POST['year'])){
			$err_birthday = "Date of birth is required!";
		}else{
			$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
		}
		
		
		
		
		
		echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Confirmed Password: ". $_POST["conpass"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
		echo "Doctor's Name: ". $_POST["dname"]."<br>";
		echo "Hospital Name: ". $_POST["hname"]."<br>";
		echo "Gender: ". $gender."<br>";
		echo "Date of Birth: ". $birthday."<br>";
		
		
	}
	
	

?>


<html>
	<head></head>
	<body>
	    <fieldset style="width:500px" align="center">
	    <legend align="center"><center><h1>Sign Up As Assistant</h1></center></legend>
		<form action="" method="post">
			<table>
			    <tr>
					<td><span><b>Name</b>:</span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td><input type="password" name="conpass" value = "<?php echo $conpass;?>"><br>
					<td><span><?php echo $err_conpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:</span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><span><b>Doctor's Name</b>:</span></td>
					<td><input type="text" name="dname" value = "<?php echo $dname;?>"><br>
					<td><span><?php echo $err_dname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hospital Name</b>:</span></td>
					<td><input type="text" name="hname" value = "<?php echo $hname;?>"><br>
					<td><span><?php echo $err_hname;?></span></td>
				</tr>
					
				<tr>
					<td><span><b>Birth Date</b>:</span></td>
                    <td>
                        <select name="day">
                            <option disabled selected>Day</option>
                            <?php 
                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="month">
                            <option disabled selected>Month</option>
                            <?php 
                                $months=array("Jan"=>"1", "Feb"=>"2", "Mar"=>"3", "Apr"=>"4", "May"=>"5", "June"=>"6","Jul"=>"7", "Aug"=>"8", "Sep"=>"9", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12");
                                foreach($months as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
                        </select>
                        <select name="year">
                        <option disabled selected>Year</option>
                        <?php 
                                for($i=1985;$i<=2021;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <?php echo $err_birthday; ?>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="Register">
			<br>
			<h5 style="text-align:left;">Already have an account? <a href="Login.php">Log-In</a></h5>
			
		</form>
		</fieldset>
	</body>
</html>