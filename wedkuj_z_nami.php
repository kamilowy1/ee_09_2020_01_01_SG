<!DOCTYPE html>
<head> 
<meta charset="utf-8"/>
<title>Klub wędkowania </title>
<link rel="stylesheet" type="text/css" href="styl2.css"/>
</head>

<body>
 <div id="blok_banera">
<h2>Wędkuj z nami!</h2>
 </div>

    <div id="lewy">
     <img src="ryba2.jpg" alt="szczupak"/>
    </div>

        <div id="prawy">
         <h3> Ryby spokojnego żeru (białe)</h3>

         <?php
         //utworzenie zmiennych polaczeniowych 
         $server = "localhost";
         $user = "root";
         $passwd = "";
         $dbname = "wedkowanie4";
         //utworzenie polaczenia 
         $conn = mysqli_connect($server,$user,$passwd,$dbname);
         //sprawdzenie polaczenia
         if (!$conn) {
            die ("fatalny blad:".mysqli_error($conn));
         } echo "jest okej <br>";
         //pobranie wartości z bazy 
         $conn = mysqli_connect($server,$user,$passwd,$dbname);
         $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=2";
         $zapytanie = mysqli_query($conn,$sql);
         while ($wiersz = mysqli_fetch_row($zapytanie)) {
            echo "$wiersz[0]. $wiersz[1],wystepuje w: $wiersz[2] <br>" ;
         }
         mysqli_close($conn);

         ?>
          <ol>
            <li><a href="https://wedkuje.pl/" target="_blank"> Odwiedź także </a> </li>
            <li><a href="https://www.pzw.org.pl/" target="_blank"> Polski związek wędkarski </a></li>
        </ol>

        </div>
                   <div id="stopka">
                    <p>Stronę wykonał:000000000</p>
                   </div> 

</body>