<!DOCTYPE html>
<html lang="en"></html>

<form method = "post" action = "ContactPage.php">
    <textarea name = "message"></textarea>
    <input type = "submit" value = "Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email ."<br>";
    echo "Message: " . $message ."<br>";

}
?>

</html>