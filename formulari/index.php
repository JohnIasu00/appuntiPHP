<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
    <a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Collegamento alla pagina bonjour per Dupont Jean!</a> 
 
    <?php include('header.php'); ?>
    
    <!-- il corpo -->
    
    <div id="corps">
        <h1>Il mio super sito</h1>
        
        <p>
            Benvenuto nel mio super sito!<br />
            Amerete questo sito che parla di cose geniali!!!... euh...mmm.... in realtá sto ancora cercando di capire cosa scrivere. :-D
        </p>
    </div>

    <?php include ("formulario.php"); ?>
    
    <!-- Le pie di pagina -->
    
   
    <?php include('contact.php'); ?>

    <?php include('footer.php'); ?>

    </body>


</html>