
MAJOR WEBPAGES OF THE BANK WEBSITE CODES SNEH:

*** THE IGNANT SHOW ***


1] process_register.php

<?php

// Sending email to user after registration

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

/* Recipient */
$to = $_POST['email'];

/* Subject */
$subject = 'Welcome to your secure online account at Global Capital Investment Union';

/* Message */
$message = "<html>
		<body>
			<div style='width:550px; background-color:#CC6600; padding:15px; font-weight:bold;'>
				Secure Online Account
			</div>
			<div style='font-family: Arial;'>
				This is a confirmation mail sent to your email id.<br/>
				You can now proceed to log into your unique and secure online account to view the contents of your dashboard.<br>
				<a href='http://www.global-capital-inv-union.com/login.php'>Please, click here to log into your secure online account.<br></a>
				Please, endeavor to keep your username and password safe, secure and known to you alone.<br><br>
			</div>
			<div>
				<p>
					Your username is: <b>$username</b>, and your password is: <b>$password</b>
                		</p>
			</div>
			<div>
                		<p>
					Thanks,<br>
                   			Warm regards.
                		</p>
				<p style='color:#4E7B28;'>Global Capital Investment Union.</p>
			</div>
                </body>
            </html>";

/* Headers */
$headers = 'MIME-Version: 1.0' . PHP_EOL;
$headers .= 'Content-type: text/html; charset=UTF-8' . PHP_EOL;

// More headers
$headers .= 'From: admin@global-capital-inv-union.com' . PHP_EOL;
$headers .= 'Reply-To: globalcapitalinvestmentunion@consultant.com' . PHP_EOL;
$headers .= 'X-Mailer: PHP/' . phpversion();

/* Send email */
mail($to, $subject, $message, $headers);
echo 'Mail Sent. Thank you: ' . $_POST['email'] . ', we will contact you shortly.';

?>






2] process_forgotpassword.php

<?php

// Connect to database
require 'connections/connections.php';

/*INSERT THE VALUES INTO THE DATABASE TABLE*/
$username = $_POST['username'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$spousename = $_POST['spousename'];
$dateofbirth = $_POST['dateofbirth'];
$contacttelephone = $_POST['contacttelephone'];

/*CHECK WHETHER EMAIL IS THE RIGHT FORMAT*/

if(!$email == "" && (!strstr($email,"@") || !strstr($email,"."))) 
{
echo "<h2>Please, kindly enter valid e-mail</h2>\n"; 
$badinput = "<h2>FORM was NOT submitted. Try again.</h2>\n";
echo $badinput;
die ("Go back! ! ");
}
else
{
	if(empty($username) || empty($email) || empty($firstname) || empty($lastname) || empty($spousename) || empty($dateofbirth) || empty($contacttelephone)) 
	{
	echo "<h2>Incomplete form. Please fill in all fields. Thank You.</h2>\n";
	die ("Use back! ! "); 
	}
}
		
// Insert Data
$sqli = "INSERT INTO forgot_password (username, email, firstname, lastname, spousename, dateofbirth, contacttelephone) 
		VALUES ('$username', '$email', '$firstname', '$lastname', '$spousename', '$dateofbirth', '$contacttelephone')";
$result = mysqli_query($conn, $sqli);

?>

<?php
// Sending email to admin after user fills forgot password form

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];

/* Recipient */
$to = "fnbc.service@fnbc-plc.com";

/* Sender */
$from = $_POST['email'];

/* Subject */
$subject = "I forgot my password";

/* Message */
$message = "<html>
		<body>
                    <p>
                       Dear Admin, please kindly help me retrieve my forgotten password. I am <b>$firstname $lastname</b>
                    </p>
                    <p>
                       My username is: <b>$username</b>
                    </p>
                    <p>
                    Thanks,<br>
                    Warm regards.
                    </p>
                </body>
            </html>";

/* Headers */
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' .$from."\r\n";
$headers .= 'Reply-To: fnbc.service@fnbc-plc.com' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

/* Send email */
mail($to, $subject, $message, $headers);
echo 'Mail Sent. Thank you: ' . $_POST['firstname'] . ', we will contact you shortly.';

?>



3] dashboard.php




4] process_online_transfer.php




5] show_transaction_history.php




6] show_starting_balance.php




7] show_account_summary.php




8] change_password.php




9] admin.php




***] 