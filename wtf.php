<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>piwo</title>
</head>
<body>
    <h3>ilosc osob w rodzinie</h3>
    <?php 
    if(isset($_POST['rodzina']))
    {
        echo <<< FORMCOUNTPERSON
        <form method="post">
        <input type="number" name="person" placeholder="Ilosc osob"><br><br>
        <input type="submit" value="Zatwierdz"><br>
        </form>
FORMCOUNTPERSON;
    if (!empty($_POST['person']))
    {
        echo <<< FORMAGEPERSON
        <h3>Ilosc osob w rodzinie: $_POST[person]</h3>
        <form method="GET">
FORMAGEPERSON;
        for($i=1; $i <= $_POST['person']; $i++)
        {
            echo <<< FORMAGEPERSON
            <input type="number" name="person" placeholder="wiek osoby: $1"><br><br>
            </form>
FORMAGEPERSON;
        }
            echo <input type="submit" name="button" value="oblicz sredni wiek"><br<br>
    }
        if(isset($_GET['ButtonAvg']))
        {
            $ageAvg=0;
            $countPerson=0;
            foreach ($_GET as $key => $value)
            {
                echo "$key: $value<br>";
                if ($key!="buttonAvg")
                {
                    $ageAvg=$AgeAvg+$value;
                    $countPerson++;
                }
            }
            echo "sredni wiek" .number_format($ageAvg/$value, 2,',',' '). "lat<hr>";
            echo "ilosc osob:  $countPerson <br>";
            <a href "wtf.php"> Strona startowa</a>;
        }
    }
    ?>
    <h3>naura</h3>
</body>
</html>