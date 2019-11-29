
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $key => $pronoun){
    if ($key==2){
        echo ucfirst($pronoun);
        echo " codes</br>";
    }else{
        echo ucfirst($pronoun);
        echo " code</br>";
    }
}
?>

<?php
$nombre = 1;
while ($nombre <= 120)
    {
        echo "$nombre, ";
        $nombre++; 
    }
?>

<?php
    for ($nombre2 = 1; $nombre2 <= 120; $nombre2 ++)
    {
        echo "$nombre2, ";
    }
?>


<?php
    $countries = ["Belgium","France","Norway","Dutchland","Portugal","Austria","Spain","Croatia","Italy"];
    $codesIso = ["BE","FR","N","D","PO","AU","S","CRO","I"];
    $countriesIso = array_combine($codesIso, $countries);
        echo '<select id="country">';
            foreach ($countriesIso as $key => $countryIso ){
                echo '<option value="'.$key.'">'.$countryIso.'</option>';
            }
        echo '</select>';
?>

</body>
</html>

