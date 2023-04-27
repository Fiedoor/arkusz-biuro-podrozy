<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wycieczki Krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'egzamin4');
    ?>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <div id="top">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
        $q1 = "SELECT `id`,`cel`,`cena` from wycieczki where `dostepna`='0'";
        $res1 = mysqli_query($conn, $q1);
        foreach ($res1 as $r) {
            echo $r['id'] . $r['cel'] . $r['cena'] . "<br>";
        }
        ?>
    </div>
    <div id="left">
        <h3>NAJTANIEJ</h3>
        <table>
            <tr>
                <td>Włochy</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Francja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Hiszpania</td>
                <td>od 1400 zł</td>
            </tr>
        </table>
    </div>
    <div id="mid">
        <h3>TU BYLIŚMY</h3>
        <?php
        $q2 = "SELECT `nazwaPliku`,`podpis` from `zdjecia` order by podpis desc";
        $res2 = mysqli_query($conn, $q2);
        foreach ($res2 as $r) {
            echo '<img src="' . $r['nazwaPliku'] . '" alt="' . $r['podpis'] . '">';
        }
        mysqli_close($conn);
        ?>
    </div>
    <div id="right">
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon 555666777</p>
    </div>
    <footer>
        <p>Stronę wykonał: Stanisław Fiedoruk 4J </p>
    </footer>
</body>

</html>