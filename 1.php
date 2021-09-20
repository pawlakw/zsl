<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
<body>
        <h3>dane uzytkownika</h3>
        <form>
            <input tpye="text" name="name" placeholder="Podaj imie"><br><br>
            <input tpye="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input tpye="submit" value="Wyslij dane"><br><br>
        </form>
    <?php
        echo $_GET['name'];
    ?>
</body>
</html>