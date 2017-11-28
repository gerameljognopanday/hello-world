<?php

if ($_POST['name']) {

	if ($_POST['gender']) {

		if ($_POST['email']) {

			if ($_POST['address']) {
				
				if ($_POST['password']) {
					
					if ($_POST['confirmpassword']) {
						
						if ($_POST['password'] == $_POST['confirmpassword']){
							echo "great!!";

						}else{
							echo "your password did not match!";
						}
					}else{
						echo "you have to confirm your password!";
					}
				}else{
					echo "you have to type your password!";
				}
			}else{
				echo "you have to type your address!";
			}

		}else{
			echo "you have to type your email!";
		}
	}else{
		you have to specify your gender!
	}
		
}else{
	echo "you have to type your name!";
}





?>