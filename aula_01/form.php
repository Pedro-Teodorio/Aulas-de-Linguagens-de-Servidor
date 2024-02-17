<?php 
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h1>Olá, $name</h1>";
    echo "<p>Seu email é: $email</p>";
}
?>