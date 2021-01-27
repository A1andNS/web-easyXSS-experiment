<span style="font-size:14px;"><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="description" content="A easy XSS Experiment">
    <meta name="keywords" content="XSS实验">
    <meta name="sitedesc" content="XSS实验">
    <title>level-2</title>
    </head>
    <body>
    <h1 align="center">Message Board<h2>
    <br>
    <form action="level4.php" method="post">
    <h2 align="center">Message:<textarea id='Mid' name="desc"></textarea></h2>
    <br>
    <h2 align="center">username:<input type="text" name="username"/><br></h2>
    <br>
    <p align="center"><input type="submit" value="submit" onclick='loction="level4.php"'/></p>
    </form>
    <?php
    if(isset($_POST['username'])&&isset($_POST['desc'])){
        if (!empty($_POST['username'])&&!empty($_POST['desc'])) {
            $log = fopen("sql.txt", "a");
            fwrite($log, str_replace("<script","<scr_ipt",strtolower($_POST['username'])) . "\r\n");
            fwrite($log, str_replace("<script","<scr_ipt",strtolower($_POST['desc'])) . "\r\n");
            fclose($log);
            echo "<script language='JavaScript' type='application/javascript'>";
            echo "window.location.href='level4_records.php'";
            echo "</script>";
        }
    }
    ?>
    </body>
    </html></span>