<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script src="jquery-1.12.0.min.js">
		
		


	</script>
	<script>
		

	</script>
</head>
<body>
<header><h1> TRAINING NEEDS SURVEY and its EVALUATION</h1></header>

<nav>
	<ul>
		<li><a href="#">HOME </a></li>
		<li><a href="#">FORM</a></li>
		<li><a href="#">PROFILE</a></li>
	</ul>
	<div class="handle">MENU</div>
</nav>  

</div>
<div class="login">
	<table>
	<form method="post" action="admin.php">
	<th><h1>Pls Login....</h1></th>
	<tr>
		<td>UserName:</td><td><input type="text" name="" value=""></td>
	</tr>
	<tr>
		<td>Password:</td><td><input type="password" name="" value=""></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="login"></td>
	</tr>

	</form>
	</table>

</div>


<div class="signup">
<table>
<th><h1>Sign in now!!!</h1></th>

<form method="Post" action="insertdata.php">

<tr>
	<td>Name:</td><td> <input type="text" name="name" /></td>
</tr>
<br /> <br />
<tr>
	<td> <input type="radio" name="gender" value="male">Male &nbsp <input type="radio" name="gender" value="female"> Female</td>
</tr>
<br /> <br /></td>
</tr>
<br /> <br />
<tr>
	<td>EmailAddress:</td><td><input type="text" name="email" /></td> 
</tr>
 <br /> <br />
<tr>
	<td>Address: </td><td><input type="text" name="address" /> </td>
</tr>
<br /> <br />
<tr>
	<td>Password:</td><td> <input type="password" name="password" /></td> 
</tr>
	<br /> <br />
<tr>
	<td>Confirm Password:</td><td> <input type="password" name="confirmpassword" /> </td>
</tr>
<br /> <br />
<tr>
	<td><input type="submit" name="submit" value="Sign Up" /></td>
</tr>
	


</form>

</table>

<script>
	
	$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});


</script>

</body>
</html>  