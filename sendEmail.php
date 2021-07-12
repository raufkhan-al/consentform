<?php 

	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require 'vendor/autoload.php';

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);


	$name1 = $_POST['name1'];
	$signature1 = $_POST['signature1'];
	$date1 = $_POST['date1'];
	$name2 = $_POST['name1'];
	$signature2 = $_POST['signature1'];
	$date2 = $_POST['date1'];
	$name3 = $_POST['name1'];
	$signature3 = $_POST['signature1'];
	$date3 = $_POST['date1'];
	$name4 = $_POST['name1'];
	$signature4 = $_POST['signature1'];
	$date4 = $_POST['date1'];

	$mail->addAddress('hauwal4969@gmail.com'); 
	$mail->From = "hauwal4969@gmail.com";
	//Send HTML or Plain Text email
	$mail->isHTML(true);
	$mail->Subject = "New Consent Form Submission"; 
	$mail->Body = '<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Consent Form</title>
	</head>
	<body>
		<style>
			table{
				border-collapse: collapse;
				padding: 20px 20px;
			}
			td,th {
				text-align: center;
				border: 1px solid #dddddd;
  				text-align: left;
  				padding: 8px;
			}
		</style>
		<table style="width:100%">
			<thead>
	            <tr>
	                <th>Name1</th>
	                <th>Signature1</th>
	                <th>Date1</th>
	            </tr>
	        </thead>
	        <tbody>
				<tr>
			        <td>'.$name1.'</td>
			        <td>'.$signature1.'</td>
			        <td>'.$date1.'</td>
			    </tr>
			</tbody>
			<thead>
	            <tr>
	                <th>Name2</th>
	                <th>Signature2</th>
	                <th>Date2</th>
	            </tr>
	        </thead>
	        <tbody>
				<tr>
			        <td>'.$name2.'</td>
			        <td>'.$signature2.'</td>
			        <td>'.$date2.'</td>
			    </tr>
			</tbody>
			<thead>
	            <tr>
	                <th>Name3</th>
	                <th>Signature3</th>
	                <th>Date3</th>
	            </tr>
	        </thead>
	        <tbody>
				<tr>
			        <td>'.$name3.'</td>
			        <td>'.$signature3.'</td>
			        <td>'.$date3.'</td>
			    </tr>
			</tbody>
			<thead>
	            <tr>
	                <th>Name4</th>
	                <th>Signature4</th>
	                <th>Date4</th>
	            </tr>
	        </thead>
	        <tbody>
				<tr>
			        <td>'.$name4.'</td>
			        <td>'.$signature4.'</td>
			        <td>'.$date4.'</td>
			    </tr>
			</tbody>
	    </table>
	</body>
	</html>';

	// Sending email
	try {
    $mail->send();
    header('Location:index.html');
	} catch (Exception $e) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	}
 ?>