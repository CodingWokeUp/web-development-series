<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Basics</title>
</head>
<body>
    <?php 
        /* DISPLAY OUTPUT */
        //echo "hello world!";
        //print "Hello World!";

        /* VARIABLES */
        $num = 123;
        $name = "Wasim";
        //var_dump($num);
        //var_dump($name);
        //echo $num;

        $NUM = 234;
        //echo $NUM;

        /* STRING */
        $msg = "Hello World";
        //echo strlen($msg);
        //echo str_word_count($msg);

        /* ARRAY */
        // Indexed Array
        $fruits = array("Apple", "Banana", "Mango", 587);
        $fruits[10] = "Cherry";
        $fruits[] = "Sample";
        //print_r($fruits);
        

        // Associative Array
        $age = array("Peter" => 35, "Wasim" => 28, "Amit" => 29);
        //print_r($age);
        foreach($age as $value){
            //echo $value."<br>";
        }

        // Two-dimensional Arrays
        $fruitss = array(
            array("Mango", 35, 18),
            array("Apple", 30, 15)
        );
        //print_r($fruitss);

        // Date & Time
        echo date("h:i:s");

        // Include Function
        //include("test.php");

        // Form Handling
        if(isset($_POST['submit'])) {
            echo $_POST['email'];
        }

    ?>

        <!--<form action="index.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit" name="submit" value="Save">
        </form>-->

</body>
</html>