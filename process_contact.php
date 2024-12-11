<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    $file = "data/contact_submissions.txt";

    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "<script>alert('Thank you for contacting us!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Failed to save your message. Please try again later.'); window.location.href='index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
