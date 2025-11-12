<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N Website</title>
</head>
<body>

    <?php 
        if(isset($_POST['SubmitButton']))
        {
            $total = 0;
            echo "<h2>Recipt</h2><hr>";
            if(!empty($_POST['Apple']))
            {
                echo "Apples: " . $_POST['Apple'] . "<br>";
                $total = $total + ( 1 * $_POST['Apple']);
            }
            if(!empty($_POST['Orange']))
            {
                echo "Oranges: " . $_POST['Orange'] . "<br>";

                $total = $total + (0.75 * $_POST['Orange']);
            }
            if(!empty($_POST['Banana']))
            {
                echo "Bananas: " . $_POST['Banana'] . "<br>";
                $total = $total + (0.5 * $_POST['Banana']);
            }            
            if(!empty($_POST['Pineapple']))
            {
                echo "Pineapples: " . $_POST['Pineapple'] . "<br>";
                $total = $total + (8 * $_POST['Pineapple']);
            }
            echo "Shipping Method: " . $_POST['Shipping'] . "<br>";
            echo "Shipping Address: " . $_POST['Address'] . "<br>";
            echo "<h3>Total: $" . $total . "</h3>";
            exit;
        }
    ?>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td>Items</td>
                <td>Price</td>
                <td>Quantity</td>
            </tr>
            <tr>
                <td>Apple</td>
                <td>$1</td>
                <td><input type="text" name="Apple" id=""></td>
            </tr>
            <tr>
                <td>Orange</td>
                <td>$0.75</td>
                <td><input type="text" name="Orange" id=""></td>
            </tr>
            <tr>
                <td>Banana</td>
                <td>$0.5</td>
                <td><input type="text" name="Banana" id=""></td>
            </tr>
            <tr>
                <td>Pineapple</td>
                <td>$8</td>
                <td><input type="text" name="Pineapple" id=""></td>
            </tr>
        </table>
        <hr>
        <h3>Shiping Method</h3>
        <select name="Shipping" id="">
            <option value="USPS">USPS</option>
            <option value="USP">UPS</option>
            <option value="Fedex">Fedex</option>
        </select>
        Shipping Address <input type="text" name="Address" id="">
        <input type="submit" value="submit" name="SubmitButton">
    </form>
</body>