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
        background-attachment: fixed
    }

    input {
        width: 475px;
        height: 50px;
        font-size: 40px;
        margin-top: 40px;
        border: 2px solid #aaa;
        padding: 10px;
    }

    select {
        width: 500px;
        height: 70px;
        font-size: 40px;
        margin-top: 40px;
        border: 2px solid #aaa;
    }

    #submit {
        width: 500px;
        height: 60px;
        font-size: 40px;
        margin-top: 20px;
        background-color: #e13333;
        border-radius: 5px;
        margin-right: 31.44%;
        padding-top: 10px
    }
</style>
<div id="nav">
    قطارات مصر
</div>
<div id="main">
    <form action="trains.php" method="post">
        <select name="start">
            <option value="0">اختر محطة القيام</option>
            <?php
            $i = 1;
            $classes = $db->getRows("SELECT station FROM trainsandstations group by station asc");
            foreach ($classes as $name) {
                echo "<option value='$i'> $name[0] </option>";
                $i++;
            }
            ?>
        </select>
        <br/>
        <select name="end">
            <option value="0">اختر محطة الوصول</option>
            <?php
            $i = 1;
            foreach ($classes as $name) {
                echo "<option value='$i'> $name[0] </option>";
                $i++;
            }
            ?>
        </select>
        <br/>
        <select name="type">
            <?php
            $i = 1;
            $classes = $db->getRows("SELECT type FROM class");
            foreach ($classes as $name) {
                echo "<option value='$i'> $name[0] </option>";
                $i++;
            }
            ?>
        </select>
        <br/>
        <input type="submit" value="عرض القطارات" style="text-decoration:none;color:#FFFFFF;" />
    </form>
</div>
<script>

</script>
</body>
</html>