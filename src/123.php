<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS</title>
</head>
<body>
<?php
$XssReflex = $_GET['input'];
echo '<form action="" method="get">';
echo '<input type="text" name="input" value="'.$XssReflex.'">';
echo '<input type="submit">';
echo '</form>';
echo '</br>';
echo 'output:<br>'.htmlentities($XssReflex);
?>
</body>
</html>