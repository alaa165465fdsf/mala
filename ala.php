<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <h2>hello bro (@_@)</h2>
        <label for="nom">Saisir votre nom:</label>
        <input type="text" name="nom" id="nom" required placeholder="Saisir votre nom:"><br><br>
        
        <label for="password">Saisir votre mot de passe:</label>
        <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe:" required><br><br>
        
        <input type="submit" onclick="cn()" value="Enregistrer">
  <footer><h3>coash Ala assadi</h3><br>
<h4>bac info 1</h4>
</footer>
    </form>
    
</body>
<script src="jeson.js"></script>
</html>
<?php
$servername = "localhost";
$username = "root";  // Default username for localhost
$password = "";      // No password set for localhost
$dbname = "loginpage";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $nom = $_POST['nom'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $nom = $conn->real_escape_string($nom);
    $password = $conn->real_escape_string($password);

    // Insert data into the database
    $sql = "INSERT INTO users (nom, password) VALUES ('$nom', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection when done
$conn->close();
?>
