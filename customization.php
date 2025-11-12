<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customization Example</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        <?php
            if(isset($_POST['Submit']))
            {
                if($_POST['Seperator'])
                {
                    echo "<hr>";
                }
                if($_POST['TextBox'])
                {
                    echo "<input type='text'>";
                }
            }
        ?>
        <input type="checkbox" name="Seperator" id="">Show seperator <br>
        <input type="checkbox" name="TextBox" id="">Show text box <br>
        <input type="submit" value="Submit" name="SubmitButton">
    </form>
</body>
</html>