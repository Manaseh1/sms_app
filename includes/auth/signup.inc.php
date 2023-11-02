<?php 
include '../db/dbconnection.php';

$first_name =$_POST['first_name'];
$last_name =$_POST['last_name'];
$phone_number =$_POST['phone_number'];
$email =   $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


if(!isset($_POST['submit'])){
    header("Location: ../../signup.php");
}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form validation and user registration
        // (Your validation code here)
    
        // Prepare and execute the SQL statement for registration
        $sql = "INSERT INTO registration (first_name, last_name,phone_number, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $first_name, $last_name,$phone_number, $email, $hashed_password);
    
        if ($stmt->execute()) {
            // Registration successful
            echo "Registration successful!";
        } else {
            // Registration failed
            echo "Registration failed: " . $stmt->error;
        }
    
        $stmt->close();
    }
}