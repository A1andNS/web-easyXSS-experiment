<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS</title>
<script>
    window.alert = function(){
        confirm("Good Job!");
        window.location.href="level3.php?keyword=123";
    }
</script>
</head>
<body>
<?php
    ini_set("display_errors", 0);
    $Username = $_GET['keyword'];
    echo "<h1 align='center'>Your Username</h1>";
    echo '<form action="level2.php" method="get">';
    echo '<p align="center"><input type="text" name="keyword" value="'.$Username.'"></p>';
    echo '<p align="center"><input type="submit"></p>';
    echo '</form>';
    echo '</br>';
    echo '<p align="center">Hello '.htmlentities($Username).'</p>';
    echo "<h3 align=center>paylaod的长度:".strlen($Username)."</h3>";
?>
</body>
</html>