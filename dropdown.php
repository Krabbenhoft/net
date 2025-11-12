<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop Down Example</title>
</head>
<body>
    <?php
        if(isset($_POST['SubmitButton']))
        {
            $array = array("Apple", "Orange", "Banana", "Pineapple");
            $favorite = $_POST['Fruit'];
            echo "Your favorite fruit is: " . $array[$favorite];
            exit;
        }
    ?>


    <h1>Radio Button Example</h1>
    What is your favorite fruit?<br>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <select name="Fruit" id="">
            <option value="0">Apple</option>
            <option value="1">?Orange?</option>
            <option value="2">?Banana?</option>
            <option value="3">?Pineapple?</option>
        </select>
        <input type="submit" value="Vote" name="SubmitButton">
    </form>
</body>
</html>