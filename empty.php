<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty Example</title>
</head>
<body>
    <?php
        if(isset($_POST['Login']))
        {
            if(empty($_POST['Name']))
            {
                $error1 = "Name field is missing";
            }
            if(empty($_POST['Password']))
            {
                $error2 == "Password field is missing";
            }
            if(empty($error1) && empty($error2))
            {
                echo "Welcome: " . $_POST['Name'] . '!<br>';
                echo "Password: " . $_POST['Password'] . '!<br>';
                echo "Is it empty: " . empty($error2);
                exit;
            } else {
                if(!empty($error1))
                {
                    echo "<div style='color:red;'> " . $error1 . "</div>";
                }
                if(!empty($error2))
                {
                    echo "<div style='color:red;'> " . $error2 . "</div>";
                }
                
            }
        }
    ?>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        Name: <input type="text" name="Name" id=""><br>
        Password: <input type="password" name="Password" id="">
        <input type="submit" value="Login" name="Login">
    </form>
</body>
</html>