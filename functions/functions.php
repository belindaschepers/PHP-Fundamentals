
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
//capitalise la première lettre
    $name = "émile";
    $name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
    echo $name;
?>
 <?php
 //afficher l'année en cours
    $date = date("Y");
    echo $date;
?>

<?php
//date, heure, minutes, secondes
    $date = date("D-d-m-y H:i:s");
    echo $date;
?>

<?php
//somme de deux nombres
    $num1 = "67";
    $num2 = "89";
    echo $num1 + $num2;
?>

<?php
//vérifier si l'élément est bien un nombre
    $num1 = "45";
    $num2 = "46";
        if(is_numeric($num1) && is_numeric($num2)){
            echo $num1 + $num2;
        } else {
            echo "Error: argument is the not a number.";
        }
?>

<?php
//prend une chaîne de caractères et renvoie un acronyme composé des initiales de chaque mot
    $string = "In code we trust!";
    $string =  preg_replace('/\b(\w)\w*\W*/', '\1', $string);
    $string =  strtoupper ($string);
    echo $string;
?>

<?php
//remplacement de lettres
    $characters = ["ae"];
    $words = ["caecotrophie","chaenichthys","microsphaera","sphaerotheca"];
        foreach ($words as $word){
            $word = str_replace($characters,"æ",$word);
            echo "$word ";
        }
?>

<?php
    $words2 = ["cæcotrophie","chænichthys","microsphæra","sphærotheca"];
        foreach ($words2 as $word2){
                $word2= strtr($word2,"æ","ae");
                echo "$word2 ";
            }
?>



</body>
</html>

