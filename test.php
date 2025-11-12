<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <?php
    if(isset($_POST['SubmitButton']))
    {
        echo "Thanks for depositing: " . $_POST["balance"] . " dollars. <br>";
        exit;
    }
    ?>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        Balance: <input type="text" name="balance" id="">
        <input type="submit" value="Submit" name="SubmitButton">
    </form>
</body>
</html>