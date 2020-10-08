<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Document</tittle>
</head>
<body>
    <?php
    if($_REQUEST['login'] == "test" && $_REQUEST['passwd'] == "123"){
        echo "Zalogowany poprawnie";
    }else {

        echo "Błędny login lub hasło";
    } 
    ?>
</body>
</html>


