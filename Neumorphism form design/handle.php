<?php
// Check karein ki form submit hua hai ya nahi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // $_POST superglobal se data nikaalein
    // htmlspecialchars() ka use security (XSS attack se bachne) ke liye karein
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['password']);

    // Data ko display karein
    echo "<h2>Aapka Data Recieve Ho Gaya:</h2>";
    echo "Naam: " . $name . "<br>";
    echo "Email: " . $password . "<br>";
} else {
    echo "Direct access allowed nahi hai!";
}
?>
