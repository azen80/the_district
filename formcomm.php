<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $address = htmlspecialchars($_POST['address']);

    $filename = date('Y-m-d-H-i-s') . '.txt';

    $content = "Nom et prénom: " . $name . "\n";
    $content .= "Email: " . $email . "\n";
    $content .= "Téléphone: " . $telephone . "\n";
    $content .= "Adresse: " . $address . "\n";
    $content .= "-----------------------------\n";


    $file_path = './formulaire_commande/' . $filename;


    file_put_contents($file_path, $content);

}
?>