<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="A easy XSS Experiment">
    <meta name="keywords" content="XSS实验">
    <meta name="sitedesc" content="XSS实验">
    <script>
        window.alert = function()
        {
            confirm("Good Job！flag1:flag{24efb7ff");
            window.location.href="level2.php?keyword=test";
        }
    </script>
    <title>Level-1</title>
</head>
<body>
<?php
if (isset($_GET['username'])){
    $username = $_GET['username'];
    echo "<h1 align='center'>hello ".$username."</h1>";
    echo "<p align='center'><img src=img/level1.jpg></p>";
}
else{

    echo '<p align="center"><form action="level1.php" method="get"></p>';
    echo "<h1 align='center'>Your username</h1>";
    echo "</br>";
    echo '<p align="center"><input type="text" name="username"></p>';
    echo '<p align="center"><input type="submit"></p>';
    echo '</form>';
}
?>
</body>
</html>
