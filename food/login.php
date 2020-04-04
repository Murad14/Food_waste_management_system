<!DOCTYPE html>
	<?php  
        $uname="";
        $pass="";
        $err_uname="";
        $err_pass="";
		
		if(isset($_POST['register']))
		{header("Location:register.php");}

		
		if(isset($_POST['submit']))
		{  
			/* for($i=0;$i<strlen($_POST['email']);$i++)
			{
				if (char_at($_POST['email'],$i )==".")
				{$pos_dot= $i;}
			} */
			
            if(empty($_POST['uname']))
            {
                $err_uname="*Username Required";
                $has_error=true;
                
            }
            else
            {
                $uname=$_POST['uname'];
            }
            if(empty($_POST['pass']))
            {
                $err_pass="*Password Required";
                $has_error=true;
                
            }
            else
            {
                $pass=$_POST['pass'];
            }
            
        }
    
    ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  	<form method="post" action=""> 
       <header>
		 
			<div class="row">
        
            <div class= text2> New!!!! Register here ------->>>></div>
		<ul class="main-nav1">
		
				<li><a href="#"><input type="submit" class="btn btn2" name ="register" value="Sign-Up"></a></li>
				<!-- <li><a href="#">Staff</a></li>
				<li><a href="#">Alumni</a></li>
				<li><a href="#">myHub</a></li> -->
			</ul>
			</div>
			
			
		</header> 
	
 
 
 
  	<div class="login-box">  
   		<h1 class="text1">Login</h1>
        <div class="textbox">
        <!-- <i class="fas fa-user"></i> -->
        <input type="text" placeholder="Username" name ='uname' value="<?php echo $uname;?>" >
        <br><span><?php echo $err_uname;?></span>     
    
    	</div>

     	<div class="textbox">
        <!-- <i class="fas fa-lock"></i> -->
        <input type="password" placeholder="Password" name ='pass' value="<?php echo $pass;?>">
          <span><?php echo $err_pass;?></span>
    	</div>
		
		<input type="submit" class="btn btn1" name ="submit" value="Log in">
    
	</div>
		
    </form> 
</body>

</html>