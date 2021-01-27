<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>XSS</title>
    <script>
        window.alert = function(){
            confirm("Good Job!");
            window.location.href="level4.php";
        }
    </script>
    <title>level-3</title>
</head>
<body>
<?php
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace("<script","<scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form action=level3.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=搜索 />
</form>
</center>';
echo "<h3 align='center'>Payload的长度:".strlen($str)."</h3>";
?>
</body>