<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Object Example</title>
</head>
<body>
    <h1>Class and object example</h1>
    <?php
        if(isset($_POST['SubmitButton']))
        {
            class horseman
            {
                public function __construct($a, $b)
                {
                    $this->name = $a;
                    $this->empire = $b;
                }


                public function describe_name()
                {
                    echo "Name: " . $this->name . "<br>";
                }   

                public function describe_empire()
                {
                    echo "Name: " . $this->empire . "<br>";
                } 




            }


            $name = $_POST['Name'];
            $empire = $_POST['Empire'];
            $myHorseman = new horseman($name, $empire);
            $myHorseman->describe_name();
            $myHorseman->describe_empire();
            exit;

        }
    ?>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        Name of your horseman: <input type="text" name="Name" id="">
        Empire of horseman: <input type="text" name="Empire" id="">
        <input type="submit" value="Submit" name="SubmitButton">
    </form>
</body>
</html>