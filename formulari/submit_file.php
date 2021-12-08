<?php
// Verifico se il file é stato inviato senza errori
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
 		 // Verifico se il file non e troppo grande
        if ($_FILES['screenshot']['size'] <= 1000000)
        {

        	// Verifico se l'estensione é una di quelle autorizzate
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                //se l'estensione e dentrol'array delle estensioni
                if (in_array($extension, $allowedExtensions))
                {
                
                	// Se tutto e andato bene possiamo stoccare il file con la funzione "move_uploaded_file( nome temporaneo file . percorso dove sara stoccato)"
                        move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
                        echo "L'envoi a bien été effectué !";

                }
 


        }
}
?>





