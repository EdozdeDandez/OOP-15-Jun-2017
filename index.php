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
            <label for="position">Category:</label><br>
            <select id="position" name="position">
                <option selected disabled>Select a category</option>
                <option value="Administrator">Administrator</option>
                <option value="Staff">Staff</option>
                <option value="Student">Student</option>
            </select><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <div class="show">
        <hr>
        <?php
        if(isset($_POST['submit'])){
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $post = $_POST['position'];
            $user;
            $array = array();
            if ($post=='Staff'){
                $user = new StaffDetails($firstname,$lastname);
                $user->setDate();
                $user->setNumber();
                $array [] = $user->record();
                echo $user->present()."<br>";
                foreach ($array as $item){
                    echo "First Name: ".$item['firstName']."<br>Last Name: ". $item['lastName']."<br>Date added: ".$item['date'];
                }
            }
            elseif ($post=='Student'){
                $user = new StudentDetails($firstname,$lastname);
                $user->setDate();
                $array = $user->record();
                echo $user->present()."<br>";
                foreach ($array as $item){
                    echo "First Name: ".$item['firstName']."<br>Last Name: ". $item['lastName']."<br>Date added: ".$item['date'];
                }
            }
            else {
                include ('Admin.php');
                $user = new app\admin\Admin($firstname,$lastname);
                echo $user::getFullName()."<br>";
                echo $user::login();
            }
//            $user = new User($firstname, $lastname);
//
//            echo $array['firstName'] . " " . $array['lastName']."<br>";
//            $userDetails = new UserDetails($firstname, $lastname);
//            $userDetails->setDate();
//            $userDetails->record();
//            echo $userDetails->getDate();
////            var_dump($array);
////            var_dump($userDetails->arr);
//            echo $userDetails->getFullName()."<br>";
//            echo $userDetails->present();
        }
        ?>
    </div>
<script>

</script>
</body>
</html>