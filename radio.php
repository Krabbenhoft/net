<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Example</title>
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
        <input type="radio" name="Fruit" id="" value="0">Apple<br>
        <input type="radio" name="Fruit" id="" value="1">Orange<br>
        <input type="radio" name="Fruit" id="" value="2">Banana<br>
        <input type="radio" name="Fruit" id="" value="3">Pineapple<br>
        <input type="submit" value="Vote" name="SubmitButton">
    </form>
</body>
</html>