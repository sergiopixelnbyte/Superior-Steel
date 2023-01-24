<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];

	$to = "esty@pixelnbyte.com";
	$subject = "Submission from Website Form";

	$message = "
	<html>
	<head>
	<title>Submission from Website Form</title>
	</head>
	<body>
	<img src='https://pixelnbyte.com/websites/superior-steel/assets/Logo.png' width='100' style='margin: 20px; margin-bottom: 0;' />
	<p style='margin-left: 20px;'>You've had a new submission on your website form.</p>
	<table style='margin-left: 20px;'>
	<tr>
	<td>Name: </td>
	<td>".$fname." ".$lname."</td>
	</tr>
	<tr>
	<td>Email: </td>
	<td><a href='mailto:".$email."'>".$email."</a></td>
	</tr>
	<tr>
	<td>Phone: </td>
	<td>".$phone."</td>
	</tr>
	<tr>
	<td>Message: </td>
	<td>".$msg."</td>
	</tr>
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	// $headers .= 'From: <info@brooklyngifting.com>' . "\r\n";

	if(mail($to,$subject,$message,$headers)) {
		echo json_encode(array('code' => 200, 'msg' => 'Message sent successfully.'));
	} else {
		echo json_encode(array('code' => 500, 'msg' => 'PHP mail() failed.'));
	}

?>