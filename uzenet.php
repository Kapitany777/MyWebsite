<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="main.css" />
        <title>Üzenet küldése</title>            
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
            <h1>Üzenet küldése</h1>
            
            <form action="uzenetkiir.php" method="post">
                <fieldset>
                    <legend>Kapcsolati információk</legend>
                    Név:<br />
                    <input type="text" name="nev" required />
                    <br />
                    
                    Email cím:<br />
                    <input type="email" name="email" />
                </fieldset>
                
                <textarea name="uzenet" rows="5" cols="50"></textarea>
                
                <input type="submit" value="Üzenet küldése" class="submit" />
            </form>
            
        </article>
        
        <footer>
            &copy; 2017 Török Viktor
        </footer>
    </body>
</html>