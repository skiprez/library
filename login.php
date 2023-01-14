<?php require "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka</title>
</head>
<body>
    <section class="display">
        
        <section class="header">
            <a href="login.php">
                 <div class="home">Strona Główna</div>
            </a>

            <a href="books.php">
                 <div class="books">Książki</div>
            </a>
                
            <a href="librarians.php">
                <div class="librarians">Bibliotekarze</div>
            </a>
                
            <a href="account.php">
                <div class="account">Konto</div>
            </a>
        </section>

            <div class="height"></div>
            
            <section class="screen">
                <div class="text">
                    <h1 class="titles">Witaj, na stronie biblioteki szkolnej.</h1>
                    <h1 class="titles">Tutaj możesz sprawdzić swoje wypożyczone książki,</h1>
                    <h1 class="titles">oraz sprawdzić dostępność książek.</h1>
                </div>
                <div class="photo">
                    <img src="img/main_photo.png" class="img">
                </div>
            </section>
            
            <section class="footer">
                <h6 class="cp">&copy; Biblioteka 2023-2023</h6>
            </section>
        
        </section>
    </body>
    </html>
</body>
<script src="app.js"></script>
</html>