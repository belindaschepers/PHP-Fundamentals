
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conditions drill exercises</title>
</head>
<body>
<?php
// 1.1 Clean your room Exercise
$room_is_filthy = true;

if($room_is_filthy == false){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [0, 1, 2];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if($possible_states == 2){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($possible_states == 1){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>
<?php
// 2. "Different greetings according to time" Exercise

$now = date("H:i:s");

// Test the value of $now and display the right message according to the specifications.
$today = date("H:i:s"); 
echo"$today";
if ($today >= "21:01:00"){
    echo "<p> Good Night !</p>";
}
elseif ($today >= "16:01:00")
{
    echo "<p> Good Evening ! </p>";
}
elseif ($today >= "12:01:00")
{
    echo "<p> Good Afternoon! </p>";
}
elseif ($today >= "09:01:00")
{
    echo "<p>Good Day !</p>";
}
elseif ($today >= "05:00:OO" )
{
    echo "<p>Good Morning !</p>";
}
else {
    echo "<p> Good night! </p>";
}
?>


<form action="condition.php" method="post">


<p>Your age: <input type="text" name="age"/> </p>
<p><input type="submit" value="submit"></p>
</form>

<?php 
//message by age

if ($_POST['age'] > 115)
{
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
if ($_POST['age'] >= 18 && $_POST['age']< 115)
{
    echo " Hello Adult!";
}
if ($_POST['age'] < 18 && $_POST['age']>12)
{
    echo "Hello Teenager!";
}
if ($_POST['age'] <= 12)
{
    echo "Hello Kiddo !";
}
?>


<form action="condition.php" method="post">
<p>Gender:
    <input type="radio" name="gender" value="femme">Woman
    <input type="radio" name="gender" value="homme">Man
</p>

<p>Age: <input type="text" name="age"/> </p>
<p><input type="submit" value="submit"></p>
</form>

<?php 
if ($_POST["gender"] == "man")
{
    if ($_POST['age'] > 115)
    {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
    if ($_POST['age'] >= 18 && $_POST['age']< 115)
    {
        echo " Hello Mister Adult!";
    }
    if ($_POST['age'] < 18 && $_POST['age']>12)
    {
        echo "Hello Mister Teenager!";
    }
    if ($_POST['age'] <= 12)
    {
        echo "Hello Mister Kiddo !";
    }
}
if ($_POST["gender"] == "woman")
{
if ($_POST['age'] > 115)
{
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
if ($_POST['age'] >= 18 && $_POST['age']< 115)
{
    echo " Hello Miss Adult!";
}
if ($_POST['age'] < 18 && $_POST['age']>12)
{
    echo "Hello Miss Teenager!";
}
if ($_POST['age'] <= 12)
{
    echo "Hello Miss Kiddo !";
}
}
?>

<form action="condition.php" method="post">
<p>Do you speak english?
    <input type="radio" name="langage" value="yes">Yes
    <input type="radio" name="langage" value="no">No
<p>You are:
    <input type="radio" name="gender" value="woman">Woman
    <input type="radio" name="gender" value="man">Man
</p>

<p>Age: <input type="text" name="age"/> </p>
<p><input type="submit" value="submit"></p>
</form>


<p>You are <?php echo (int)$_POST['age']; ?> years old.</p>
<p>You are a <?php echo  $_POST['gender']  ; ?></p>

<?php 
    if ($_POST["langage"] == "yes"){
        if ($_POST["gender"] == "man")
        {
            if ($_POST['age'] > 115)
            {
                echo "Wow mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Hello Mister Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Hello Mister Teenager!";
            }
            if ($_POST['age'] <= 12)
            {
                echo "Hello Mister Kiddo !";
            }
        }
        if ($_POST["gender"] == "woman")
        {
            if ($_POST['age'] > 115)
            {
                echo "Wow Miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Hello Miss Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Hello Miss Teenager!";
            }
            if ($_POST['age'] <= 12)
            {
                echo "Hello Miss Kiddo !";
            }
        }
    }
    if ($_POST["langage"] == "no"){
        if ($_POST["gender"] == "man")
        {
            if ($_POST['age'] > 115)
            {
                echo "Aloha Wow Mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Aloha Mister Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Aloha Mister Teenager!";
            }
            if ($_POST['age'] <= 12)
            {
                echo "Aloha Mister Kiddo !";
            }
        }
        if ($_POST["gender"] == "woman")
        {
            if ($_POST['age'] > 115)
            {
                echo "Aloha Wow Miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Aloha Miss Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Aloha Miss Teenager!";
            }
            if ($_POST['age'] <= 12)
            {
                echo "Aloha Miss Kiddo !";
            }
        }
    }
?>

<form action="condition.php" method="post">
<p>Votre age: <input type="text" name="age"/> </p>
<p>Votre Sexe:
    <input type="radio" name="gender" value="woman">Woman
    <input type="radio" name="gender" value="man">Man
</p>
<p><input type="submit" value="submit"></p>
</form>

<?php
//girls soccer team
    if ($_POST["gender"] == "man")
    {
        echo "Sorry you don't fit the criteria";
    }
    if ($_POST["gender"] == "woman")
    {
        if ($_POST["age"]>=21 && $_POST["age"]<=40){
            echo "Welcome to the team";
        }
        else {
            echo "Sorry you don't fit the criteria";
        }
    }
?>

<form action="condition.php" method="post">
<p>Age: <input type="text" name="age"/> </p>
<p>Gender:
    <input type="radio" name="gender" value="woman">Woman
    <input type="radio" name="gender" value="man">Man
</p>
<p><input type="submit" value="submit"></p>
</form>

<?php
    $equip = "Sorry you don't fit the criteria";
    if ($_POST["gender"] == "woman" && $_POST["age"]>=21 && $_POST["age"]<=40)
    {
        $equip = "Welcome to the team";   
    }
    echo $equip;
?>

</body>
</html>

