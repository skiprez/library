<?php 

    // require "account.php";

    require "database.php"; 

    $sql = "SELECT ilosc FROM ksiazki WHERE id_ksiazki = 1";
    $sql1 = "SELECT ilosc FROM ksiazki WHERE id_ksiazki = 2";
    $result = $link->query($sql);
    $result1 = $link->query($sql1);

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
            
            <section class="screenb">
                <div class="book">
                    <div class="books-img"><img src="img/kamienie_na_szaniec.png" class="img"></div>
                    <div class="book-title">Kamienie na Szaniec</div>
                    <div class="book-desc">Kamienie na szaniec – książka Aleksandra Kamińskiego opowiadająca o 
                        działalności grupy członków Szarych Szeregów w Warszawie podczas II wojny światowej. 
                        Jest oparta na prawdziwych wydarzeniach z końca lat 30, i okresu okupacji niemieckiej.</div>
                </div>
                <div class="able">
                    <div class="able-text">
                        <?php 
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  echo "Dostępne: ".$row['ilosc'];
                                }
                            }
                        ?>
                    </div>
                </div>
                
                <div class="book">
                    <div class="books-img"><img src="img/pan_tadeusz.png" class="img"></div>
                    <div class="book-title">Pan Tadeusz</div>
                    <div class="book-desc">Pan Tadeusz, czyli ostatni zajazd na Litwie – poemat epicki Adama Mickiewicza wydany w dwóch tomach w 1834 w Paryżu przez Aleksandra Jełowickiego.
                        Ta epopeja narodowa (z elementami gawędy szlacheckiej) powstała w latach 1832–1834 w Paryżu. 
                        Składa się z dwunastu ksiąg pisanych wierszem, trzynastozgłoskowym aleksandrynem polskim. Czas akcji: pięć dni z roku 1811 i jeden dzień z roku 1812.
                        Epopeja jest stałą pozycją na polskiej liście lektur szkolnych. W 2012 była publicznie odczytywana w akcji społecznej 
                        propagującej znajomość literatury polskiej Narodowe Czytanie Pana Tadeusza.</div>
                </div>
                <div class="able">
                    <div class="able-text">
                        <?php
                            if ($result1->num_rows > 0) {
                                while($row = $result1->fetch_assoc()) {
                                  echo "Dostępne: ".$row['ilosc'];
                                }
                            }
                        ?>
                    </div>
                </div>
            </section>
            
            <section class="arrows">
                <div class="arrowl"><</div>
                <div class="arrowr">></div>
            </section>

            <section class="footerb">
                <h6 class="cp">&copy; Biblioteka 2023-2023</h6>
            </section>
        
        </section>
    </body>
    </html>
</body>
<script src="app.js"></script>
</html>