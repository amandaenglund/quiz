<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>


<form action="" method="post">
<?php 
$text = "Varifrån kommer Glenn?";
echo $text; 
?> 
<br/>
    <input type="radio" name="answer" value="true"> Göteborg<br/>
    <input type="radio" name="answer" value="false"> Hudiksvall<br/>
    <input type="radio" name="answer" value="false"> Tomelilla<br/>
    <input type="submit" value="RÄTTA"><br/>
</form>
<br/><br/><br/>


<?php


if ($_POST["answer"] == "true" ) {
    echo "Rätt svar!";
} else {
    echo "Fel svar :(";
}



?>

    
</body>
</html>
