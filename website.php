<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Stuff!</title>
</head>
<body>
    <h1>Buy Stuff from Me</h1>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        <hr>
        <h1>Items to Buy</h1>
        <input type="checkbox" name="Fruit[]" id="" value="0">Apple $1<br>
        <input type="checkbox" name="Fruit[]" id="" value="1">Orange $0.75<br>
        <input type="checkbox" name="Fruit[]" id="" value="2">Banana<br>
        <input type="checkbox" name="Fruit[]" id="" value="3">Pineapple<br>

        Apple $1   
        Orange $0.75
        Banana $0.5
        Pinapple $8

        <hr>
        <h2>Shipping Method</h2>
        <select name="Shipping" id="">
            <option value="0">USPS</option>
            <option value="1">UPS</option>
            <option value="2">Fedex</option>
        </select>

        <hr>
        <h2>Address</h2>
        Address: <input type="text" name="Address" id=""><br>

        <hr>
        <input type="submit" value="Submit" name="SubmitButton"><br>
    </form>
</body>
</html>