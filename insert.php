<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone_no = $_POST['phone'];
	 $message = $_POST['message'];

	 

	 $sql = "INSERT INTO contcts (name,email,phone_no,message)
	 VALUES ('$name','$email','$phone_no','$message')";
	 if (mysqli_query($conn, $sql)) {
		// echo "New record created successfully !";

		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thank you for getting in touch! شکرا لتواصلکم معنا ');
    window.location.href='http://localhost/Yellow_Media_Pagess/';
    </script>");

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>