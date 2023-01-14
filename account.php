<?php require "database.php"; 

    $id = $_POST['id'];
    $login = $_POST['login'];
    $password = $_POST['password'];

?>
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
                <div class="profile-picture"><img id="pfp"></div>
                <div class="data">
                    <?php
                    
                        $sql = "SELECT l.id_ucznia, l.login, l.haslo, u.id_ucznia, u.imie, u.nazwisko, u.id_wypozyczenia, w.id_wypozyczenia, w.id_ucznia, w.data, w.data_oddania, w.oddana 
                        FROM logins l LEFT JOIN uczniowie u ON l.id_ucznia = u.id_ucznia 
                        LEFT JOIN wypozyczenia w 
                        ON l.id_ucznia = w.id_ucznia 
                        LEFT JOIN uczniowie u 
                        ON u.id_wypozyczenia = w.id_wypozyczenia 
                        WHERE l.id_ucznia=$id AND l.login=$login AND l.haslo=$password";
                        $result = $link->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                              echo "Imię: ".$row['l.imie']." "."Nazwisko: ".$row['l.nazwisko']." "."ID: ".$row['l.id_ucznia'];
                            }
                        }else{
                            echo "Jesteś nie zalogowany";
                        }
                    ?>
                </div>
                <div class="settings"></div>
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