<?php 
include 'includes/head.php'?>
<html>
<head>
    <title>SMS Form</title>
</head>
<body>
    <div class="container">
    <form method="POST" action="sms.php" class='form-control'>
    <div class="form-group">
        <label for="to">To:</label>
        <input type="text" name="to" id="to" placeholder="Enter recipient phone number"><br><br>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="message" class= 'form-control'id="message" placeholder="Enter your message"></textarea><br><br>

        <input type="submit" value="Send SMS">
    </div>
    </form>
    </div>
</body>
</html>



