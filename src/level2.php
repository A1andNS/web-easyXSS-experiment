<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS</title>
<script>
    window.alert = function(){
        confirm("Good Job!");
        window.location.href="level3.php";
    }
</script>
</head>
<body>
<?php
    $Username="";
    echo "<h1 align='center'>Your Username</h1>";
    echo '<form action="" method="get">';
    echo '<p align="center"><input type="text" name="keyword" value="'.$Username.'"></p>';
    echo '<p align="center"><input type="submit"></p>';
    echo '</form>';
    echo '</br>';
    if (isset($_GET['keyword'])){
        $Username = $_GET['keyword'];
        echo '<p align="center">Hello '.htmlentities($Username).'</p>';
    }
?>
</body>
</html>