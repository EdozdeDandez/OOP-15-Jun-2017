<!DOCTYPE html>
<html>
<head>
    <title>Object Oriented PHP</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <?php if(isset($_GET['objects'])){
        $objects = $_GET['objects'];
    }?>
</head>
<body>
    <div class="parent">
        <form method="post" name="newForm" action="connect.php">
            <label for="fname">First Name:</label><br>
            <input id="fname" name="fname"><br><br>
            <label for="lname">Last Name</label><br>
            <input id="lname" name="lname"><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <div class="child">
        <form method="post" name="newChildForm" action="connect.php">
            <label for="cfname">First Name:</label><br>
            <input id="cfname" name="cfname"><br><br>
            <label for="clname">Last Name</label><br>
            <input id="clname" name="clname"><br><br>
            <input type="submit" value="Submit" name="add">
        </form>
    </div>
    <div class="show">
        <hr>
        <?php if (isset($objects)){
            echo $objects;
        }?>
    </div>
</body>
</html>