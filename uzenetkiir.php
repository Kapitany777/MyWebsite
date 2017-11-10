<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="main.css" />
        <title>Üzenet tartalmának kiírása</title>            
    </head>
    
    <body>
        <header>
            <a href="index.php"><img src="images/logo.png" width="128" height="128" alt="Logo" /></a>
            <div>
                Török Viktor honlapja
            </div>
        </header>
        
        <nav>
            <ul>
                <li><a href="index.php">Bemutatkozás</a></li>
                <li><a href="ai.php">Mesterséges intelligencia</a></li>
                <li><a href="picprog.php">PIC programozás</a></li>
                <li><a href="linkek.php">Linkek</a></li>
                <li><a href="uzenet.php">Üzenet</a></li>
            </ul>
        </nav>
        
        <article>
            <h1>Üzenet tartalmának kiírása</h1>
            
            <?php
            if (isset($_POST["nev"]) && isset($_POST["email"]) && isset($_POST["uzenet"]))
            {
            
            }
            else
            {
                print("<p><strong>Sajnos nem találtam üzenetet!</strong></p>\n");
            }
            ?>
            
        </article>
        
        <footer>
            &copy; 2017 Török Viktor
        </footer>
    </body>
</html>