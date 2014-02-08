<?php 
require 'connect_config.php';

$current_file=$_SERVER['SCRIPT_NAME'];

if(isset($_POST['username'])&&isset($_POST['password'])){
    
    $username=$_POST['username'];
	$password=$_POST['password'];
	
	
	if(!empty($username)&&!empty($password)){
		$query="SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password'";
		if($query_run=mysql_query($query)){
			
			$query_num_rows=mysql_num_rows($query_run);
			if ($query_num_rows==0) {
				echo "Invalid username/password combination.";
				echo "$query_num_rows";
			} else  if($query_num_rows==1){
				
				header('Location: http://localhost/matt_a2/login_successfully.php');
				exit;
			}
			
		}else{
			
			
		}
	}else{
		
		echo "You much supply a username and password.";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charaset="utf-8" />
    <title>The Pitch FC</title>
    <link rel="stylesheet" href="./css/login.css">
    
</head>
<body>
   <div id="big_wrapper">
       
    <header id="top_header">
       
        <img src="Logo.png" width="350" height="148">
         <h1>Member Login</h1>
    </header>
       
    <nav id="top_menu">
        
    <ul>
        
         <li><a style="color:white;" href="index.html">Home</a></li>
        <li><a  style="color:white;" href="online_shopping.html">Online Shopping</a></li>
        <li><a  style="color:white;" href="login.html">Login</a></li>
        <li><a  style="color:white;" href="forum.html">Scooer Forum</a></li>
        <li><a  style="color:white;" href="about_us.html">About us</a></li>
      <li><input type="text" name="search"><input type="submit"  value="Go"></li>
           
     </ul>
        
    </nav>
       
    <div id="new_div">
        <section id="main_section">
            <article>
                <header>
                   <form action="<?php echo $current_file; ?>" method="POST">
                       Username: <input type="text" name="username" ><br><br>
                        Password: <input type="password" name="password"><br><br>
                        <input type="submit" name="Login" value="log in">
                    
                    </form>
                </header>
               
                <footer>
                      <p>Do not have an account?<a href="register.php">Register now</a></p>
                </footer>
                
            </article>
            
            
    </div>
     <footer id="the_footer">
        <a style="color:#940000;" href="index.html">
    &copy; The Pitch FC 2014
            </a> 
        <p style="color:#940000;">some code borrowed by <a  href="http://blog.som2y.com">sOm2y</a></p>
    </footer>
 </div>
</body>
</html>