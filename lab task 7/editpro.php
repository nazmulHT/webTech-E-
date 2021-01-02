<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
 <!DOCTYPE html>


<html>
		<head>
			<title><b>Log IN</b></title>
			<style>
			.ashab{text-align:left;
			      padding: 5px
				  margin : 10px;
			     }
			
			</style>
		</head>
		<?php
$nameErr =  $emailErr = $passErr = "";
$name =  $email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
	{
      $nameErr = "Only letters and white space allowed";
    }
  }

  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr = "Invalid email format";
    }
  }

 if (empty($_POST["password"])) 
  {
    $passErr = "Password is required";
  } 
  else 
  {
    $pass = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$pass)) 
	{
      $pass = "Only letters and white space allowed";
    }
  }
  

}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
	<form class="ashab" action="" enctype="multipart/form-data"" method="post" >
		<body>
	            
					
				<h1>Profile Picture:</h1>
				<input type="file" name="mypic">
				<input type="submit" name="picturesubmit" value="Change profile picture">
				<br></br>
				
				<B>First Name:</b> <input type="text" name="name" placeholder="Enter First Name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 
	
				
	`			<b>E-MAIL:</b> <input type="text" name="email" placeholder="Enter Email"  value="<?php  echo  $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <h5>Your Password</h5>
  <B>Password:</b> <input type="text" name="password" placeholder="Enter Password" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  <input type="submit" name="Continue" value="continue">  
					
					
				</body>
			</form>
		



		
	
			<?php include_once("Includer/Header.php")?>
    
   
    </div>
    
    <?php include_once("Includer/Sidebar.php")?>
   

    <div class="content">
      <div class="card">
        <h1></h1>
      </div>
      
    </div>

    

  </body>
</html>