<!DOCTYPE html>
<html>
<head>
    <?php
    include("database.php");
    $db = new database();
    ?>
</head>
<body>
    <style>
        html {
            padding: 0;
            margin: 0;
            overflow-y: hidden;
        }

        body {
            direction: rtl;
            padding: 0;
            margin: 0;
            height: 1000px;
        }

        #nav {
            width: auto;
            height: 70px;
            background-color: #e13333;
            text-align: center;
            text-decoration-color: #fff;
            padding-top: 10px;
            color: #fff;
            font-size: 50px;
        }

        #main {
            width: 100%;
            height: 100%;
            text-align: center;
            background-image: url("wallhaven.png");
            background-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <div id="nav">
        قطارات مصر
    </div>
    <div id="main">
        <?php
        if($_post['submit']=='عرض القطارات')
        echo $_POST['start'];
        ?>
    </div>

</body>
</html>
