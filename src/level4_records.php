<span style="font-size:14px;"><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="description" content="A easy XSS Experiment">
    <meta name="keywords" content="XSS实验">
    <meta name="sitedesc" content="XSS实验">
    <title>level-4</title>
    <script>
        window.alert = function()
        {
            confirm("Good Job！");
            window.location.href="finish.html";
        }
    </script>
    </head>
    <body>
<?php
    if(file_exists("sql.txt"))
    {
        echo "<h1 align='center'>All Records</h1>";
        $read= fopen("sql.txt",'r');
        while(!feof($read))
        {
            echo "<p align='center'>".fgets($read)."</p></br>";
        }
        fclose($read);
    }
?>
    </body>
    </html></span>
