<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

$imie = $_REQUEST['imie'];



          var_dump($_REQUEST);
         if($_REQUEST['haslo'] == $_REQUEST['phaslo']){
             echo "Hasła są zgodne";
         } else {
             echo "Hasła nie są zgodne";
         }

echo "<br>";
         if ($_REQUEST['plec'] == 'mezczyzna'){
    echo "witam pana";
}
else {
    echo "Witam panią";
}
echo "<br>";

if ($_REQUEST['data']<'2021-12-29' && $_REQUEST['data']>'1900-01-01'){
echo "Data jest prawidłowa";
}
else {
    echo "Data jest nie prawidłowa";
}
echo "<br>";
 if(strlen($imie) > 2){
     echo "Imie jest prawidłowe";
 }
else {
    echo "Imie musi być dłuższe niż 2 znaki";
}
echo "<br>";

if (isset($_REQUEST["regulamin"]))
{
    echo "Regulamin zaakceptowany";
}
else {
    echo "Zaakceptuj Regulamin";
}
          ?>
          </pre>
</body>
</html>