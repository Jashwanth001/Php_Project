<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="num1">
        <select name="operations">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2">
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // Grab the data
            $num1 = filter_input(INPUT_POST,"num1", FILTER_VALIDATE_FLOAT);
            $num2 = filter_input(INPUT_POST,"num2", FILTER_VALIDATE_FLOAT);
            $operation = htmlspecialchars($_POST["operations"]);

            // error handling 

            $error = false;

            if(empty($num1) || empty($num2) || empty($operation)){
                echo "<p>Enter a Valid Input</p>";
                $error = true;
            }

            if(!is_numeric($num1) || !is_numeric($num2)){
                echo "<p>Enter a Numeric Input</p>";
                $error = true;
            }

           if(!$error){
            $value = 0;
            switch ($operation) {
                case 'add':
                    $answer = $num1 + $num2;
                    break;
                case 'sub':
                    $answer = $num1 - $num2;
                    break;
                case 'mul':
                    $answer = $num1 * $num2;
                    break;
                case 'div':
                    if($num2 == 0){
                        echo "<p> Cannot Divide by Zero";
                    }else{
                        $answer = $num1 / $num2;
                    }
                    break;
                    
                default:
                    echo "<p>Something went wrong</p>";
                    break;
            }

            echo "<p>Result:" . $answer . "</p>";
           }
    }
    ?>
</body>
</html>