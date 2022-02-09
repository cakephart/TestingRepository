
<?php
	$title = "Send Emails to Subscribers";
	require '../view/headerInclude.php';
        require '../view/AdminNavInclude.php';
        require_once 'Mail.php';
?>

<h1 class="filesHeadings text-center">Sending Emails to Subscribers about our Newsletter</h1>
<p class='uploadFiles'><a class='goBackButton' href='../Controller/Controller.php?action=Home'>Go Back</a></p>

<?php
	$options = array();
	$options['host'] = 'ssl://smtp.gmail.com';
	$options['port'] = 465;
	$options['auth'] = true;
	$options['username'] = 'balloflettuce8@gmail.com';
	$options['password'] = 'Skywalker33';
	$mailer = Mail::factory('smtp', $options);

	$headers = array ();
	$headers['From'] = 'Chandler Kephart and Brady Bizzarri <balloflettuce8@gmail.com>';
	$headers['Subject'] = 'Powerline Practice Facility Newsletter';
	$headers['Content-type'] = 'text/html'; //Underneath this line is the message in the email body for the user to see

        $fileatt = "PowerlinePractice Facility Newsletter.pdf";

        $fileatttype = "application/pdf";

        $fileattname = "PowerlinePractice Facility Newsletter.pdf";
        
	// $recipients is an array of addresses,$message is the html
	$message ='<html><head></head><body><h1>Hello Subscriber. Our Newsletter has been updated and we feel you should take a look.</h1></body></html>' . file_get_contents("../Newsletters/Newsletter.html");
	
        //End of email body
        echo "<h3 class='fontColorWhite uploadFiles'>Sending Email To:</h3><ol>"; //how to see who recieved emails on server side
		$file = fopen('../Documents/NewsletterSubscribers.csv', 'rb'); //Open the file we created from registration, fetch and send
		while (($data = fgetcsv($file)) !== FALSE) 
                {
			echo "<li class='fontColorWhite uploadFiles'>$data[0] $data[1] ($data[2])</li>" ;
			$recipients[] = $data[2];
		}
    echo "<p class='fontColorWhite uploadFiles'</ol></p>";
    fclose($file);	
	
	$result = $mailer->send($recipients, $headers, $message);
//If PEAR is malfunctioning spit an error at us, if working spit out confirmation 
if (PEAR::isError($result)) 
{
    echo "<p class='fontColorWhite uploadFiles'>Error sending email.</p>";
} 
else 
{
    echo "<p class='fontColorWhite uploadFiles'>Email Sent Successfully.</p>";
}
	require '../view/footerInclude.php';
?>

