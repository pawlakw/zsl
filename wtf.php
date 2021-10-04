<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b3>ilosc osob w rodzinie</b3>
    <?php 
    if(isset($_POST['rodzina']))
    {
        echo <<< FORMCOUNTPERSON
        <form method="post">
        <input type="number" name="person" placeholder="Ilosc osob"><br><br>
        <input type="submit" value="Zatwierdz"><br>
        </form>
FORMCOUNTPERSON;
    }
    if (!empty($_POST['person']))
    {
        echo <<< FORMAGEPERSON
        <h3>Ilosc osob w rodzinie</h3>
        <form>
FORMAGEPERSON;
        for($i=1; $i <= $_POST['person']; $i++)
        {

            echo <<< FORMAGEPERSON
            <input type="number" name="person" placeholder="wiek osoby: $1"><br><br>
            </form>
FORMAGEPERSON;
        }

    }
    ?>
    <h3>naura</h3>
</body>
</html>