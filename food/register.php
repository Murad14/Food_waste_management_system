<html lang="en" dir="ltr">
	<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
    </head>
	<body>
	<?php
		$err_fname="";
		$fname="";
		$err_lname="";
		$lname="";
		$uname="";
        $pass="";
		$pass2="";
		$err_pass2="";
		$err_uname="";
		$err_pass="";
		
		$err_phone="";
		$phone="";
		$area="";
		$err_area="";
		$email="";
		$err_email="";
		$pos_dot="";
		$address1="";
		$err_add1="";
		$address2="";
		$err_add2="";
		$city="";
		$err_city="";
		$state="";
		$err_state="";
		$postal="";
		$err_postal="";
        $member="";



		if(isset($_POST['submit']))
		{
			/* for($i=0;$i<strlen($_POST['email']);$i++)
			{
				if (char_at($_POST['email'],$i )==".")
				{$pos_dot= $i;}
			} */
			
			if(empty($_POST['fname']))
			{
				$err_fname="*First Name Required";
			}
			else
			{			
				$fname=htmlspecialchars($_POST['fname']);
				echo $fname;
			}
			if (empty($_POST['lname']))
			{
				$err_lname="*Last name Required";
			}
			else
			{	$lname=htmlspecialchars($_POST['lname']);
				echo $lname;
			}
			
			if(empty($_POST['uname']))
            {
                $err_uname="*Username Required";
                
                
            }
            else
            {
                $uname=$_POST['uname'];
            }
            if(empty($_POST['pass']))
            {
                $err_pass="*Password Required";
                
                
            }
            else
            { if($_POST['pass2']==$_POST['pass'])
               {
				    $pass=$_POST['pass'];
			   }
			   else
			   {
				   $err_pass="*Password did not match please re-type";
				  
			   }
			   
			}
			
			
			if (empty($_POST['email']))
			{
				$err_email="*email required";
			}
			else
			{	
		
				if (strpos($_POST["email"],'@'))
					{ if (strpos($_POST["email"],'.'))
						{	
							$email=$_POST['email'];
							echo $email;
						}
					}
			}
			
			if(empty($_POST['phone']))
			{
				$err_phone="*phone number";
			}
			else
			{	if(is_numeric ( $_POST['phone']))		
				{	$phone=$_POST['phone'];
					echo $phone;
				}
				else{
					$err_phone="enter the right phone number";
				}
			}
			if (empty($_POST['area']))
			{
				$err_area="*area required";
			}
			else
			{	$area=htmlspecialchars($_POST['area']);
				echo $area;
			}
			
			
			
			if(empty($_POST['address1']))
			{
				$err_add1="*Street Address required ";
			}
			else
			{			
				$address1=htmlspecialchars($_POST['address1']);
                echo $address1;
                $address2=htmlspecialchars($_POST['address2']);
				echo $address2;
			}


			// if(empty($_POST['address2']))
			// {
			// 	$err_add2="*street address required";
			// }
			// else
			// {			
			// 	$address2=htmlspecialchars($_POST['address2']);
			// 	echo $address2;
			// }

			if(empty($_POST['city']))
			{
				$err_city="*City Name Required";
			}
			else
			{			
				$city=htmlspecialchars($_POST['city']);
                echo $city;
                $state=htmlspecialchars($_POST['state']);
				echo $state;
			}

			// if(empty($_POST['state']))
			// {
			// 	$err_state="*State/Province Name Required";
			// }
			// else
			// {			
			// 	$state=htmlspecialchars($_POST['state']);
			// 	echo $state;
			// }

			if(is_numeric ($_POST['postal']))
			{
				$err_postal="*postal code Required";
			}
			else
			{			
				$postal=htmlspecialchars($_POST['state']);
				echo $postal;
			}
			
			
			if (empty($_POST['hear[]']))
			{
				$err_pass="*please give a tick on the check box";
			}
			else
			{
				$pass=$_POST['hear[]'];
			}
		}
	?>
	<div class= container>
	<span class="text1"><b> Membership Registration</b></span>
	<span class="text2">Complete the form below to sign up for our membership service.</span>	
	<hr>
	</div >
    <div class="form">
	<form method="post" action="">
			<!-- <table> -->

				    <div class="textbox">
					<!-- <label style="color:white" for "name"><b>Name:</label> -->
					<input type="text"  placeholder= "First name" value="<?php echo $fname;?>" name="fname" >
						<input type="text"  placeholder="Last name" value="<?php echo $lname;?>" name="lname" >
						<!-- <br><span>First Name</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>Last Name</span> -->
						<span style="color:red"><?php echo $err_fname;?></span>
					
					 	
						<br>
						<span style="color:red"><?php echo $err_lname;?></span>
					
				 </div>
				
				 <div class="textbox">
					<!-- <label for "email" style="color:white"><b>E-mail: </label> -->
					<input type="text"  placeholder="username" name="uname" value="<?php echo $uname;?>">
					<span style="color:red"><?php echo $err_uname;?></span>
					<!-- <br><span>Email</span> -->
					
				
				</div>

				<div class="textbox">
					<!-- <label for "email" style="color:white"><b>E-mail: </label> -->
					<input type="password"  placeholder="password" name="pass" value="<?php echo $pass;?>">
					<input type="password"  placeholder="re-type password" name="pass2" value="<?php echo $pass2;?>">
					
					<span style="color:red"><?php echo $err_pass;?></span>
					<span style="color:red"><?php echo $err_pass2;?></span>
					<!-- <br><span>Email</span> -->
					
				
				</div>

				

				<div class="textbox">
					<!-- <label for "email" style="color:white"><b>E-mail: </label> -->
					<input type="text"  placeholder="eg:myname@example.com" name="email" value="<?php echo $email;?>">
					<span style="color:red"><?php echo $err_email;?></span>
					<!-- <br><span>Email</span> -->
					
				
				</div>
				
				<div class="textbox">
					<!-- <td style="color:white"><b>Phone:</td> -->
					 
                    <!-- <input type="text" name="area" value="<?php echo $area;?>"> -->
					<input type="text" class= "textbox t4" placeholder="phonenumber" name="phone" value="<?php echo $phone;?>">
					<!-- <br><span>area code</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>phone number</span> -->
						
					
						<!-- <span style="color:red"><?php echo $err_area;?></span> -->
					
						<br><span style="color:red"><?php echo $err_phone;?></span>
					
				</div>

				<div class="textbox">
					
					<!-- <td style="color:white"><b>Address:</b></td> -->
					<td><input type="text"  placeholder="Street address" value="<?php echo $address1;?>" name="address1" >
					<input type="text"  placeholder="Street address part 2" value="<?php echo $address2;?>" name="address2" >
						
						<span style="color:red"><?php echo $err_add1;?></span>    
						<span style="color:red"><?php echo $err_add2;?></span>	
					<!-- <br><span>Street address</span> -->
					<!-- <br><span>Street address Line 2</span> -->
						
				</div>
					
				<div class="textbox">	
						<input type="text"  placeholder="City" value="<?php echo $city;?>" name="city" >
						<!-- <input type="text"  placeholder="State/province"  value="<?php echo $state;?>" name="state" > -->
						
						<!-- <br><span>City</span>  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <span>State / Province </span> -->
						<span style="color:red"><?php echo $err_city;?></span>

						
						<br>
						<!-- <span style="color:red"><?php echo $err_state;?></span> -->
						
					
				
				</div>
				
				<div class="textbox">
						<input type="text"   placeholder="Postal/Zip code" value="<?php echo $postal;?>" name="postal" >
						<!-- <br><span>postal / Zip Code</span> -->
						<span style="color:red"><?php echo $err_postal;?></span>
					
				</div>
			   
				<div class="radio">
                
					<label for "member" style="color:white"><b>Member type: </b></label>
					<input type="radio" name="member" value="Shopkeeper"> Retail manager <input type="radio" name="member" value="customer"> Customer
				
				</div>


				<div class= checkbox>
					<label for "where" style="color:white"><b>where did you hear about us?</b> </label>
					<input type="checkbox" name="hear[]" value="friend">A Friend or colleague <br>
					 <input type="checkbox" name="hear[]" value="Google"> Google<br> 
					 <input type="checkbox" name="hear[]" value="Blog"> Blog Post <br>
					 <input type="checkbox" name="hear[]" value="news"> News Article 
					
				</div>
			
				<div class= combobox>
					<label for "dob" style="color:white"><b>Birth date</label>
					<td>
						<select>
						<?php 

							for($i=1; $i<=31; $i++)
								 {
  									?>

									<option value="<?php echo $i;?>"><?php echo $i;?></option>
									<?php
								}
											?> 
						</select> 
				

					
						<select>
						<?php 

							for($i=1; $i<=12; $i++)
								 {
  									?>

									<option value="<?php echo $i;?>"><?php echo $i;?></option>
									<?php
								}
											?> 
					    </select> 
				

					
						<select>
						<?php 

							for($i=1970; $i<=2020; $i++)
								 {
  									?>

									<option value="<?php echo $i;?>"><?php echo $i;?></option>
									<?php
								}
											?> 
				        </select> 	
				
				
				
					<br><span>day</span>&emsp;&nbsp;<span>month</span>&emsp;<span>year</span>
					
				</div>
				
				
				
				
				<!-- 	<tr>
					<td>Profession: </td>
					<td>
						<select name="profession">
							<option>Teacher</option>
							<option selected="selected">Student</option>
							<option>Govt. JOb</option>
						</select>
					</td>
				</tr>
				<tr> -->
				<div class="cnt">
						<input type="submit" align="center" class="btn btn1" name="submit" value="Submit">
				</div>	
				
				 
				
				
				
				
				
				
				
			<!-- </table> -->
		</form>
	</div>
	
	</body>
</html>