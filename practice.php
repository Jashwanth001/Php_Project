<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>I am Jashwanth</p>
    <?php
        $name = "Hello Jashwanth";
        echo $name;

        // scalable data types
        $String1 = "First Code";
        $String2 = "Second Code";
        $int = 76;
        $float = 69.4545;
        $bool = false;

        echo "<br>";
        echo $int . "<br>";
        echo "The float value is". $float;

        // string operator

        $c = $String1 . " " . $String2;
        echo "<br>" .$c;

        //Arithmetic operator
        // It goes like the bodmas rule
        $a = 10;
        $b = 20;
        $c = $a + $b; // +, -, *, /, %, **
        echo "<br>" .$c;

        // Assignment Operator = , *= 

        $a = 10;
        $a += 5 ;
        echo "<br>".$a;

        // comparison Operator  > , <, >=, <=, ==(check the value only), ===(Check the datatype and value also), !=, !==, 

        $a = 4;
        $b = 3;
        if($a > $b){ // in between we use >, <, >=, <=, == , ===, !=, !==
            echo "<br>".'This is greater';
        }

        // increment operator or decrement operator ++, --

        $a = 5;
        ++$a; // --$a, $a++, $a--
        echo "<br>".$a;

        // array new version

        // array built-in-methods
        // sort()
        // count()
        // array_splice()
        // array_push()
        // print_r
        // multidimensional array 
        // key name => "Jash",

        $names = ["Jash", "Kumar", "Santhosh", "Hitman"];
        $fruits = ["Mango", "banana", "apple"];

        echo "<br>" .$names[2] ."<br>";
        print_r($names);

        echo "<br>" . count($names);

        // unset delete the index of the array
        // sort($names);
        // print_r($names);
        // count count($names)
        // array_push($names, "Mani");

        // print_r($names);
        array_push($fruits,"grape");
        print_r($fruits);
        array_splice($names,1,0,"Virat");
        print_r($names."<br>");
        
        // multidimensional array

        $food = [
            "fruits" => array("Mango", "banana", "orange"),
            "vegetables" => array("Carrot", "tomato", "onion")
        ];
        
        echo $food["vegetables"][0];
        echo $food["fruits"][2];


        //array 5.3 below version's

        $names = array("Jash", "Kumar", "Santhosh");

        // declare a object

        //$object = new Car();

        // superglobals variable 

        echo $_SERVER["DOCUMENT_ROOT"]; // the file root path
        echo $_SERVER["PHP_SELF"]; // php path
        echo $_SERVER["SERVER_NAME"]; // server name is localhost
        echo $_SERVER["REQUEST_METHOD"]; // get or post method

        // $GET[""];
        // $POST[""];
        // $COOKIE[""];
        // $SESSION[""];
        // $REQUEST[""];
        // $FILES[""];
        // $ENV[""];

        // Conditional statement and control statements

        $a = 10;
        $b = 20;

        // if and else if and else

        if($a == $b){
            echo "<br>". "a is equal to b";
        }else if($a != $b){
            echo "<br>"."a is not equal";
        }else{
            echo "<br>"."No of the conditions are true";
        }

        // switch statement 

        switch($a){
            case 1:
                echo "<br>"."A";
                break;
            case 2:
                echo "<br>"."B";
                break;
            default:
                echo "<br>"."None of the Conditions is true";
        }

        //match function

        $result = match($a){
            1 => "<br>"."A",
            2 => "<br>"."B",
            default => "<br>"."None of the Conditions is true",
        };

        echo $result;
        
        // built-in functions

        $name = "Jashwanth Kumar";
        echo "<br>".strlen($name);
        echo "<br>".strpos($name,'h');
        echo "<br>".str_replace($name,"Jash","kumar");
        echo "<br>".strtolower($name);
        echo "<br>".strtoupper($name);
        echo "<br>".substr($name,2,6)."<br>";
        print_r(explode(" ",$name)); // string to array
        echo "<br>";
        print_r(explode(" ",$name)); 
        echo "<br>";
        print_r(explode(" ",$name));

        // math operation 

        $number = 5.5;

        echo "<br>".strlen($number);
        echo "<br>".abs($number);
        echo "<br>".sqrt($number);
        echo "<br>".pow($number,2);
        echo "<br>".round($number);
        echo "<br>".rand(1,100);

        // array methods

        $fruits = ["Mango","banana","apple"];

        echo "<br>".count($fruits);
        echo "<br>".is_array($fruits);
        echo "<br>".array_push($fruits,"Kiwi");
        print_r($fruits);
        echo "<br>".array_pop($fruits);
        echo "<br>";
        print_r($fruits);
        echo "<br>";
        print_r(array_reverse($fruits));
        echo "<br>";
        print_r(array_merge($fruits,$names));

        echo "<br>".date("Y-m-d H:i:s");

        // user defined function

        function Hello(int $n1, int $n2){
            $tot = $n1 + $n2;
            return $tot;
        }

        echo "<br>".Hello(2,5);
        echo "<br>";
        for($i = 0; $i<10; $i++){
            echo $i."<br>";
        }

        // constants 
        // global scope is created always in the top
        define("PI", 3.14); // this is global constants so here in constants we can't change the value again
        echo "<br>".PI; // and also constant is using in all the functions, class, 
        
        // class constants
        class MyClass {
            const VERSION = '1.0'; // class const
            
            public function showVersion() {
                echo self::VERSION;  // Inside the class
            }
        }

        // scopes- local, global, static, class

        // global scope
        echo "<br>";

        $test = "Jash";

        function helloWorld(){
            global $test; // so for the we use a global keyword to use the variable
            echo $test; // so here it shows a error due to global scope can't be used inside a function or class's

        }
        echo helloWorld();

        // local scope
        // local scope is only access inside the function and class
        function world(){
            $name = "jash";
        }
        echo world();

        // static scope 

        function countNumber(){
            $number = 0;

            $number++;

            return $number;
        }
        // this three gives always 1 because the variable is increment the function only
        // so we use static keyword for the variable number so it access always 
        echo "<br>" .countNumber();
        echo "<br>" .countNumber();
        echo "<br>" .countNumber();


        // class scope

        class Hello{
            // class scope used inside a class

        }

        // loops - for, while, do-while, foreach
        // for loop

        for($i = 0; $i<10; $i++){
            echo $i."<br>";
        }

        // while loop
        $i = 5;
        while($i <= 10){
            echo "This number is:". $i . "<br>";
            $i++;
        }

        //do-while loop
        $i = 8;
        do{
            echo $i;
            $i++;
        }while($i<8);

        echo "<br>";
        
        //foreach

        $arr = ["apple", "Orange", "grape"];

        foreach($arr as $ar){
            echo "The array is:" . $ar . "<br>";
        }

        $name = "JAshwanth";
        echo $name;

        $a = 201;
        $b = 131;
        $c = $a + $b;
        echo "<br>".$c;

        if($a>$b){
            echo "<br>"."True";
        }else{
            echo "<br>"."False";
        }

        for($i = 1; $i<11; $i++){
            echo "<br>".$i;
        }
    ?>
</body>
</html>