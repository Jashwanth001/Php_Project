<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $part_time = isset($_POST['parttime']) ? 1: 0;
    $joineddate = $_POST['joined_date'];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO students (name, email, phone, address, gender, department, parttime, joined_date) VALUES (:name, :email, :phone, :address, :gender, :department, :parttime, :joined_date);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':phone',$phone);
        $stmt->bindParam(':address',$address);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':department',$department);
        $stmt->bindParam(':parttime',$part_time);
        $stmt->bindParam(':joined_date',$joineddate);

        $stmt->execute();

        // if($pdo -> query($query) === TRUE){
        //     echo "Student Registered Successfully";
        // }
        // else{   
        //     echo "Error";
        // }

        $pdo = null;
        $stmt = null;

        header("Location: ../Student_Registration.php");

        die();
        
    }catch(PDOException $e){
        die("Query Failed". $e->getMessage());
    }
}
else{
    header("Location: ../Student_Registration.php");
}

