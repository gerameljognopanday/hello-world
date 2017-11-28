<?php 

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];


if ($name && $gender && $email && $address && $password ) {

	mysql_connect("localhost", "root", "") or die ("could'nt connect for now pls try later");

	mysql_select_db("sample");

	mysql_query("INSERT INTO user(name,gender,email,address,password) VALUES ('$name','$gender','$email','$address','$password')");

	//$numreg = mysql_affected_rows();

	//echo "$numreg was inserted";

	include('admin.php');
	
}else{

	echo '<script type="text/javascript">
		window.alert("you have to complete the form!!!")


	</script>';

	include('form.php');

}


 ?>