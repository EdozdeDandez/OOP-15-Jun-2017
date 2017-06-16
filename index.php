<!DOCTYPE html>
<html>
<head>
    <title>Object Oriented PHP</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <?php
    include('autoload.php');
    ?>
</head>
<body>
    <div class="parent">
        <form method="post" name="newForm" action="index.php">
            <label for="fname">First Name:</label><br>
            <input id="fname" name="fname"><br><br>
            <label for="lname">Last Name</label><br>
            <input id="lname" name="lname"><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <div class="show">
        <hr>
        <?php
        if(isset($_POST['submit'])){
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $user = new User($firstname, $lastname);
            $array = $user->record();
            echo $array['firstName'] . " " . $array['lastName']."<br>";
            $userDetails = new UserDetails($firstname, $lastname);
            $userDetails->setDate();
            $userDetails->record();
            echo $userDetails->getDate();
            var_dump($user->arr);
            var_dump($userDetails->arr);
            echo $userDetails->getFullName()."<br>";
            echo $userDetails->present();
        }
        ?>
    </div>
<script>

</script>
</body>
</html>