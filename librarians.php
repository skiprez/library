<?php 

    require "database.php"; 
 
    // require "account.php";
 
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
            
            <section class="screenl">
                <div class="librarian">
                    <div class="librarian-photo">
                        <img src="img/man.png" class="img">
                    </div>
                    <div class="librarian-name">Jan Kowalski</div>
                    <div class="librarian-duty">
                        <!-- <?php
                            $sql = "SELECT pracuje FROM bibliotekarze WHERE id_bibliotekarza = 1";
                            if ($res = mysqli_query($link, $sql)) {
                                if (mysqli_num_rows($res) > 0) {
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo "Pracuję: ".$row['pracuje'];
                                    }
                                }
                            }
                        ?> -->
                    </div>
                </div>

                <div class="librarian">
                    <div class="librarian-photo">
                        <img src="img/woman.png" class="img">
                    </div>
                    <div class="librarian-name">Anna Kowalska</div>
                    <div class="librarian-duty">
                        <!-- <?php 
                           $sql = "SELECT pracuje FROM bibliotekarze WHERE id_bibliotekarza = 1";
                           if ($res = mysqli_query($link, $sql)) {
                               if (mysqli_num_rows($res) > 0) {
                                   while ($row = mysqli_fetch_array($res)) {
                                       echo "Pracuję: ".$row['pracuje'];
                                   }
                               }
                           }
                        ?> -->
                    </div>
                </div>
            </section>
            
            <section class="footerl">
                <h6 class="cp">&copy; Biblioteka 2023-2023</h6>
            </section>
        
        </section>
    </body>
    </html>
</body>
<script src="app.js"></script>
</html>