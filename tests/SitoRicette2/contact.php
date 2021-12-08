<?php

// submit_contact.php
if (!isset($_POST['email']) || !isset($_POST['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}	

$email = $_POST['email'];
$message = $_POST['message'];

?>