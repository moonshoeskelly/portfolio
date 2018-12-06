<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'gmail.com' // Put you mail domain here
	,
	'Clever Kelly' // Put your site name / form name here
	,
	'dement.kelly@gmail.com' // Where will the form notification be sent?
	,
	'noreply@cleverkelly.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
