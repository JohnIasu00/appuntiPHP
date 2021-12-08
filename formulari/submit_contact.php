
<?php
if (
    (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))

    || 
    ( !isset($_GET['message']) && !empty($_GET['message'])

        
    )
    )
{
	echo('Serve un email e un messaggio valido per poter inviare il messaggio');
    return;
}
?>


