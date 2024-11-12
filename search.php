<?php 
if([$_SERVER["REQUEST_METHOD"] == "POST"]){
    $usersearch = $_POST["search"];

    try{
        require_once "includes/dbh.inc.php";
        $query = "SELECT * FROM comments WHERE Username = :search;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":search",$usersearch);
    
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    }catch(PDOException $e){
        die("Query Failed:" .$e->getMessage());
    }

}
else{
    header("Location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form label input{
            padding:10px;
            display: flex;
            flex-direction: column;
            align-items:center;
            justify-content: center;
        }
        button{
            padding:10px;
        }
        input{
            margin:10px;
            font-size: 15px;
        }
        label{
            font-size: 20px;
        }
        button{
            margin-top:10px;
            font-size: 20px;
            background-color: black;
            color: white;
            border-radius: 5px;
        }
        select{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h3>Search Details</h3>
    <?php 
        if(empty($results)){
            echo "There is No such Results Available ";
        }
        else{
            foreach($results as $row){
                echo "<h4>" . htmlentities($row["Username"]) . "</h4>";
                echo "<p>" . htmlentities($row["Message"]) . "</p>" ;
                echo "<p>" . htmlentities($row["Created_At"]) ."</p>";
            }
        }

    ?>
    
</body>
</html>