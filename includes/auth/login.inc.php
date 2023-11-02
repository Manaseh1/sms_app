<?php
include '../db/dbconnection.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve the hashed password from the database based on the user's email
    $stmt = $conn->prepare("SELECT id, email, password FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $db_email, $db_password);
        $stmt->fetch();

        // Verify the entered password against the stored hashed password
        if (password_verify($password, $db_password)) {
            // Password is correct, login successful
            session_start();
            $_SESSION['id'] = $id;
            header("Location: welcome.php"); // Redirect to a welcome page
            exit();
        } else {
            // Password is incorrect, show an error message
            echo "Login failed. Invalid email or password.";
        }
    } else {
        // User with the entered email does not exist
        echo "Login failed. User not found.";
    }

    $stmt->close();
}
?>
